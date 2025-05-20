FROM php:8.2-cli

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpq-dev libonig-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www

# Copia os arquivos do projeto
COPY . .

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Garante permissões corretas
RUN chmod -R 775 storage bootstrap/cache

# Expõe a porta
EXPOSE 8000

# Comando para rodar o Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
