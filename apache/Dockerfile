FROM php:7.4-apache

RUN apt-get update && apt-get install -y libmariadb-dev && docker-php-ext-install mysqli

COPY app/ /var/www/html/

EXPOSE 80
