#/bin/bash

# Change the ownership some of the files
######################################
CURRENT_USER=$(eval "whoami")
CURRENT_GROUP=$(eval "id -gn")

# Source code location
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/app
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/bootstrap
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/config
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/public
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/resources
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/routes

# Database migrations
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/database/migrations
sudo chown -R $CURRENT_USER:$CURRENT_GROUP source/database/factories

# Change ownership of the entire .git directory
sudo chown -R $CURRENT_USER:$CURRENT_GROUP .git
sudo chown -R nobody:nogroup source/storage
sudo chmod -R 775 source/storage

# Create the storage/logs directory if it doesn't exist and set permissions
sudo mkdir -p /var/www/html/storage/logs
sudo chown -R nobody:nogroup /var/www/html/storage/logs
sudo chmod -R 775 /var/www/html/storage/logs

# SQLite Database Setup
######################################
# Pastikan direktori dan file database ada
DB_PATH="source/database"
DB_FILE="$DB_PATH/database.sqlite"
# Buat direktori database jika belum ada
if [ ! -d "$DB_PATH" ]; then
    mkdir -p "$DB_PATH"
fi
# Buat file database.sqlite jika belum ada
if [ ! -f "$DB_FILE" ]; then
    touch "$DB_FILE"
fi
# Set izin dan kepemilikan
chown -R nobody:nogroup $DB_PATH
chmod -R 775 $DB_PATH
# Pull from the repository
######################################
#eval $(ssh-agent)
#sudo -E ssh-add ~/.ssh/vps_gio_eds
# Membatalkan semua perubahan lokal dan mengembalikan ke commit terakhir dari remote
#sudo git reset --hard
# Lakukan git pull untuk menarik perubahan dari remote repository
#git pull


######################################
# Build Image
######################################

# Show all command and variable value
set -x

# Load configuration from .env file
set -o allexport

# If .env not exist then use format.env
if [ -f deploy.env ]; then
	source deploy.env
else
	echo "Please populate the deploy.env file from deploy.env.format"
	exit
fi
set +o allexport

# Hide all command and variable value again
set +x

# Build image from Docker file with var $IMAGE_REPO_NAME and tag $IMAGE_TAG
# You can see it from .env configuration
sudo docker build --platform=linux/amd64 --pull --rm -f "$DOCKER_FILE" -t $IMAGE_REPO_NAME:$IMAGE_TAG "."

# Show all list of docker iamge
sudo docker image ls


# Deploy to swarm
sudo docker stack deploy -c docker-compose.yaml $DOCKER_SWARM_STACK_NAME --with-registry-auth --detach=false
#sudo docker stack remove artha_medica