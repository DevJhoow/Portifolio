# FROM php:8.2-cli

# # Instala dependências do sistema
# RUN apt-get update && apt-get install -y \
#     git curl zip unzip libzip-dev libonig-dev \
#     && docker-php-ext-install pdo pdo_pgsql zip

# # Instala Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Define diretório de trabalho
# WORKDIR /var/www

# # Copia os arquivos do projeto
# COPY . .

# # Instala dependências do Laravel
# RUN composer install --no-dev --optimize-autoloader \
#     && php artisan config:cache \
#     && chmod -R 775 storage bootstrap/cache

# # Expõe a porta
# EXPOSE 8000

# # Comando para rodar o Laravel
# CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

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
    && docker-php-ext-install zip gd intl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-interaction --optimize-autoloader

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

EXPOSE 9000

CMD ["php-fpm"]

