FROM php:7.1-fpm

RUN apt-get update && apt-get install -y zlib1g-dev \
    && docker-php-ext-install zip

RUN apt-get update && apt-get install -y libmcrypt-dev mariadb-client \
    && docker-php-ext-install mcrypt pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install git -y

WORKDIR /var/www/goquiz
