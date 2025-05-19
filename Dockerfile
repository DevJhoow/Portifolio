FROM php:8.2-cli

# Instala dependências necessárias
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql zip

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define a pasta de trabalho
WORKDIR /var/www

# Copia os arquivos do projeto
COPY . .

# Permissão (opcional)
RUN chmod -R 755 /var/www
