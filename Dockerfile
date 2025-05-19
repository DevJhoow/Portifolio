# Dockerfile
FROM php:8.2-cli

# Instala extensões e ferramentas necessárias
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define a pasta de trabalho
WORKDIR /var/www

# Copia os arquivos (depois que o Laravel estiver criado)
COPY . .

# Permissão de escrita (opcional)
RUN chmod -R 755 /var/www

RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql
