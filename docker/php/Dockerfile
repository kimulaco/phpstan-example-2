FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libmemcached-dev \
    libz-dev \
    libssl-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached

WORKDIR /var/www/html
