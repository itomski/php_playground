# Basis-Image
# FROM ubuntu:latest
FROM php:8.2-apache

# Befehle, die ausgeführt werden sollen
#RUN apt-get update && apt-get install -y apache2

#RUN apt-get update && apt-get install -y \
#       zlib1g-dev \
#       libzip-dev \
#       unzip

RUN docker-php-ext-install pdo pdo_mysql

#COPY --from=composer /usr/bin/composer /usr/bin/composer
#RUN composer self-update

#RUN composer install

# Dateien aus diesem Ordner auf den Server kopieren
COPY . /var/www/html/

EXPOSE 80

#CMD ["apachectl", "-D", "FOREGROUND"]