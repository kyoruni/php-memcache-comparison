FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libmemcached-dev zlib1g-dev \
    && pecl install memcache \
    && docker-php-ext-enable memcache

WORKDIR /var/www/html
