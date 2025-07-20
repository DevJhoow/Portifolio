FROM php:8.2-apache

RUN apt-get update && apt-get install -y libzip-dev unzip libonig-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
