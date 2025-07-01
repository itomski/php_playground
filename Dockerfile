#FROM ubuntu:latest
#RUN apt-get update && apt-get install -y apache2
#COPY index.php /var/www/html/
#EXPOSE 80
#CMD ["apachectl", "-D", "FOREGROUND"]

FROM php:8.3-apache
COPY ./start.php /var/www/html