FROM ghcr.io/geronimo794/docker-alpine-php-open-swoole:1.0.0

# Setup document root
WORKDIR /var/www/html

# Configure PHP-FPM
ENV PHP_INI_DIR=/etc/php83
COPY config/php.ini ${PHP_INI_DIR}/conf.d/custom.ini

# Configure supervisord
COPY config/dev/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Make sure files/folders needed by the processes are accessable when they run under the nobody user
RUN chown -R nobody.nobody /var/www/html /run

# Switch to use a non-root user from here on
USER nobody

# Add application
# COPY --chown=nobody src/ /var/www/html/

# Expose the port nginx is reachable on
EXPOSE 8080

# Let supervisord start nginx & php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/up || exit 1

#######################
# EOF From Dockerfile #
#######################
USER root

# Install php83 iconv
RUN apk add --no-cache \
    php83-iconv

RUN apk add --no-cache \
  nodejs npm

USER nobody


