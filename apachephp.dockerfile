FROM php:8.1-apache


RUN addgroup teacher

COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN mkdir -p /var/www/html/public
WORKDIR /var/www/html/public


RUN apt-get update

# Module apache qui sert à la ré-écriture d'URL
RUN a2enmod rewrite
# On ne se sert pas de postgresql dasn ce conteneur, mais c'est nécessaire de l'installer avec la libpq-dev
# si on veut pouvoir installer l'extension php-pdo_pgsql
RUN apt-get -y install postgresql libpq-dev


# Add packages for laravel
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql

# CMD ["php"]

CMD ["apache2-foreground"]