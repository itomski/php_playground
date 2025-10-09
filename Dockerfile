# Basis-Image
# FROM ubuntu:latest
FROM php:8.2-apache

# Befehle, die ausgeführt werden sollen
#RUN apt-get update && apt-get install -y apache2
RUN docker-php-ext-install pdo pdo_mysql

# Dateien aus diesem Ordner auf den Server kopieren
COPY . /var/www/html/

EXPOSE 80

#CMD ["apachectl", "-D", "FOREGROUND"]