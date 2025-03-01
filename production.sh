#!/bin/bash
set -e  # Hentikan script jika ada error
set -x  # Tampilkan perintah yang dieksekusi

# Set variabel
CURRENT_USER=$(whoami)
CURRENT_GROUP=$(id -gn)
IMAGE_NAME="eds_company_profile"
OLD_IMAGE_TAG="2.2.0"
NEW_IMAGE_TAG="2.3.0"

# Load environment variables
if [ -f deploy.env ]; then
    source deploy.env
    export $(grep -v '^#' deploy.env | xargs)
else
    echo "Error: deploy.env tidak ditemukan!"
    exit 1
fi

# Update kode dari repository
eval $(ssh-agent)
sudo -E ssh-add ~/.ssh/vps_gio_eds
sudo git reset --hard
git pull

# Hapus image lama jika ada
if docker images | grep -q "${IMAGE_NAME}:${OLD_IMAGE_TAG}"; then
    docker rmi -f ${IMAGE_NAME}:${OLD_IMAGE_TAG}
fi

# Build dan push image baru
docker build -t ${IMAGE_NAME}:${NEW_IMAGE_TAG} .
docker push ${IMAGE_NAME}:${NEW_IMAGE_TAG}

# Set izin untuk source code
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/{app,bootstrap,config,public,resources,resources/lang,routes}
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/database/{migrations,factories}
sudo chmod -R 775 source/app

# Atur izin untuk storage & logs
sudo chown -R nobody:nogroup source/storage
sudo chmod -R 775 source/storage
sudo mkdir -p /var/www/html/storage/logs
sudo chown -R nobody:nogroup /var/www/html/storage/logs
sudo chmod -R 775 /var/www/html/storage/logs

# Reset database SQLite
sudo rm -f /var/www/html/database/database.sqlite
sudo touch /var/www/html/database/database.sqlite
sudo php artisan migrate --force

# Deploy ke Docker Swarm
sudo docker stack remove eds_company_profile || true
sudo docker build --platform=linux/amd64 --pull --rm -f "$DOCKER_FILE" -t $IMAGE_REPO_NAME:$IMAGE_TAG "."
sudo docker stack deploy --compose-file docker-compose.yaml $DOCKER_SWARM_STACK_NAME --with-registry-auth --detach=false

if [ $? -eq 0 ]; then
    sudo docker image prune -a -f
    echo "Deployment berhasil!"
    sudo docker stack ps $DOCKER_SWARM_STACK_NAME
else
    echo "Deployment gagal. Periksa log untuk detailnya."
    exit 1
fi