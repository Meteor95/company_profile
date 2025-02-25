ARG ALPINE_VERSION=3.19
FROM alpine:${ALPINE_VERSION}
LABEL Maintainer="Mochmad Aries Setyawan <seira@erayadigital.co.id>"
LABEL Description="Container for Laravel 11 Company Profile Eraya Digital"

WORKDIR /var/www/html

# Install required packages
RUN apk add --no-cache \
    php83 \
    php83-fpm \
    php83-mysqli \
    php83-pdo_mysql \
    php83-tokenizer \
    php83-xml \
    php83-mbstring \
    php83-curl \
    php83-openssl \
    php83-zip \
    unzip \
    nginx \
    supervisor

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY --chown=nobody:nobody source/ /var/www/html/

# Composer install
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Set permissions
RUN chown -R nobody:nobody /var/www/html /run

# Switch to non-root user
USER nobody

# Expose port
EXPOSE 8080

# Start Supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

# Healthcheck
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/up || exit 1