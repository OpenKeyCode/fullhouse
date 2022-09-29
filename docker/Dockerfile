FROM php:8.1-apache

USER "${USER_ID}:${GROUP_ID}"

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && docker-php-ext-configure gd \
    && pecl install xdebug-3.1.5 \
    && docker-php-ext-enable xdebug

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ADD ./docker/000-default.conf /etc/apache2/sites-available/000-default.conf
ADD ./docker/php.ini /usr/local/etc/php/php.ini
ADD ./docker/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite
