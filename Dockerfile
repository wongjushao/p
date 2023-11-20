FROM php:8.2.4-apache
WORKDIR /the/workdir/path

RUN a2enmod rewrite

RUN apt-get update -y && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip