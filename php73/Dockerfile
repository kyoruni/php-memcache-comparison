FROM php:7.3-fpm

RUN apt-get update && apt-get install -y \
    libmemcached-dev zlib1g-dev \
    && pecl install memcache-4.0.5.2 \
    && docker-php-ext-enable memcache

WORKDIR /var/www/html