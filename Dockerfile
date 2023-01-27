FROM php:8.1-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer​ | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . ./
RUN apk update && apk upgrade
RUN apk add php-sqlite3
RUN composer install
RUN php artisan migrate --force
CMD php artisan serve --host=0.0.0.0
