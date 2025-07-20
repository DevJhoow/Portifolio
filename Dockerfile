# Usando a imagem oficial PHP com extensões necessárias para Laravel
FROM php:8.2-fpm

# Instala dependências do sistema, PHP e extensões necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd

# Instala Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia o código da aplicação para dentro do container
WORKDIR /var/www/html
COPY . .

# Instala as dependências PHP via Composer
RUN composer install --optimize-autoloader --no-dev

# Gera a chave da aplicação (se não existir)
RUN php artisan key:generate

# Dá permissão para storage e cache (ajuste conforme necessário)
RUN chown -R www-data:www-data storage bootstrap/cache

# Expõe a porta padrão do PHP-FPM
EXPOSE 9000

# Comando padrão para rodar PHP-FPM
CMD ["php-fpm"]
