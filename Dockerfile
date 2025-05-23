FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    bash \
    curl \
    zip \
    unzip \
    libpng \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    oniguruma-dev \
    openssl \
    git \
    icu-dev \
    postgresql-dev \
    && docker-php-ext-install zip gd intl pdo pdo_pgsql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-interaction --optimize-autoloader

RUN php artisan config:clear && php artisan route:cache

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
