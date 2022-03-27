FROM php:8.1-apache

RUN apt-get update \
 && apt-get install -y git zlib1g-dev tree \
 && docker-php-ext-install mysqli pdo pdo_mysql

RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer