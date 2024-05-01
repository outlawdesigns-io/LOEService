FROM php:8.2-apache
ENV TZ=America/Chicago
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install xml
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
ADD ./ /var/www/html
RUN apt-get update && apt-get install cron -y
RUN chmod -R 0755 /var/www/html
RUN chmod +x /var/www/html/Libs/ContainerSetup/webContainerSetup.sh
RUN /var/www/html/Libs/ContainerSetup/webContainerSetup.sh /mnt/LOE/log/LOEService.access.log
RUN chmod +x /var/www/html/Libs/cronClientSetup/cronWrapperSetup.sh
RUN /var/www/html/Libs/cronClientSetup/cronWrapperSetup.sh
RUN mkdir /var/www/html/LOE
RUN crontab < /var/www/html/Libs/LOEServer/crontab
RUN service cron start
EXPOSE 443
