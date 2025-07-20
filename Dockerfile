# Usa imagem base com PHP
FROM php:8.2-apache

# Copia os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Define permissões corretas
RUN chown -R www-data:www-data /var/www/html

# Expõe a porta 80 (usada pelo Apache)
EXPOSE 80
