FROM ghcr.io/hito-software/docker:0.1.0

VOLUME /var/www/html/storage/app
VOLUME /var/www/html/storage/framework
VOLUME /var/www/html/storage/logs

COPY src /var/www/html
RUN fix-permissions
