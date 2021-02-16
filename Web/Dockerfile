FROM php:7.4-apache

RUN /bin/bash -c 'ls -la ; chmod -R 0774 /var/www; ls -la' \
&& chown -R www-data:www-data /var/www \ 
&& docker-php-ext-install mysqli

COPY page/ /var/www/html

EXPOSE 80
