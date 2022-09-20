FROM php:8.1.6-fpm-alpine


RUN addgroup -g 1006 --system teacher
RUN adduser -G teacher --system -D -s /bin/sh -u 1006 teacher

RUN sed -i "s/user = www-data/user =teacher/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = teacher/g" /usr/local/etc/php-fpm.d/www.conf

RUN mkdir -p /var/www/html/public

RUN set -ex \
  && apk --no-cache add \
    postgresql-dev

# Add packages for laravel
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql

CMD ["php-fpm"]
