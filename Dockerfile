FROM composer:2.5.5 as composer

FROM php:7.4-apache as php

RUN apt-get update && apt-get install -y \
  git zlib1g-dev curl libicu-dev libpng-dev \
  libssl-dev libtidy-dev libcurl4-openssl-dev \
  pkg-config libxml2 libxml2-dev libzip-dev \
  libfreetype6-dev libjpeg62-turbo-dev

RUN docker-php-ext-configure gd --enable-gd --with-freetype=/usr/local/lib --with-jpeg=/usr/local/lib
RUN docker-php-ext-install zip pdo_mysql mysqli intl gd soap curl opcache posix simplexml tidy exif

ENV APACHE_DOCUMENT_ROOT /var/www/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite proxy_http ssl headers

RUN mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
RUN sed -i 's/max_execution_time = 30/max_execution_time = 300/g' /usr/local/etc/php/php.ini
RUN sed -i 's/memory_limit = 128M/memory_limit = 512M/g' /usr/local/etc/php/php.ini
RUN sed -i 's/;max_input_vars = 1000/max_input_vars = 3000/g' /usr/local/etc/php/php.ini
RUN sed -i 's/post_max_size = 8M/post_max_size = 50M/g' /usr/local/etc/php/php.ini
RUN sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 50M/g' /usr/local/etc/php/php.ini

# Install nodejs
RUN curl -sL https://deb.nodesource.com/setup_12.x -o nodesource_setup.sh && bash nodesource_setup.sh && apt-get -y --force-yes install nodejs

WORKDIR /var/www/
RUN chmod -R 777 /var/www/

COPY --from=composer /usr/bin/composer /usr/bin/composer
