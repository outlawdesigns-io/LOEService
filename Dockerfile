FROM ulsmith/rpi-raspbian-apache-php
ADD ./ /var/www/html
RUN apt-get update
RUN chmod -R 0755 /var/www/html
RUN rm /var/www/html/index.html
RUN chmod +x /var/www/html/setup.sh
RUN mkdir /mnt/LOE/
RUN mkdir /mnt/LOE/log
RUN mkdir /var/www/html/LOE
RUN /var/www/html/setup.sh
EXPOSE 80
CMD ["/run.sh"]