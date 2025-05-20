# Imagem base com Apache
FROM php:8.2-apache

# Instala dependências do sistema e extensões PHP
RUN apt-get update && apt-get install -y \
    git unzip zip curl libzip-dev libonig-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Ativa o mod_rewrite do Apache para o Laravel funcionar
RUN a2enmod rewrite

# Configura o DocumentRoot para a pasta /public
ENV APACHE_DOCUMENT_ROOT /var/www/public

# Atualiza o virtual host do Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Define o diretório de trabalho
WORKDIR /var/www

# Copia os arquivos do projeto Laravel
COPY . .

# Instala as dependências do Laravel e faz cache das rotas/views
RUN composer install --no-dev --optimize-autoloader \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && chmod -R 775 storage bootstrap/cache

# Expõe a porta padrão do Apache
EXPOSE 80

# Usa o comando padrão do Apache
CMD ["apache2-foreground"]
