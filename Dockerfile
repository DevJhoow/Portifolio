FROM php:8.2-fpm

# Instalar extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip libpng-dev libjpeg-dev libfreetype6-dev \
 && docker-php-ext-configure zip \
 && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl gd


 RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev \
 && docker-php-ext-configure zip \
 && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl gd


# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar arquivos da aplicação para dentro do container
COPY . .

# Instalar dependências do Laravel
RUN composer install --optimize-autoloader --no-dev

# Configurar permissões (ajuste conforme necessário)
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expor a porta 8000 para o servidor embutido
EXPOSE 8000

# Rodar o servidor embutido do Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
