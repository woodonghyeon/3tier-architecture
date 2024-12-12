FROM php:7.4-apache

RUN a2enmod status

RUN apt-get update && apt-get install -y libmariadb-dev-compat && docker-php-ext-install mysqli

COPY ./apache-config.conf /etc/apache2/sites-available/000-default.conf

COPY app/ /var/www/html/

EXPOSE 80
