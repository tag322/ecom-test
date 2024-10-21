FROM php:8.3-fpm

WORKDIR /var/www

RUN docker-php-ext-configure pcntl --enable-pcntl \
  && docker-php-ext-install \
    pcntl

RUN apt-get update

RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

EXPOSE 8080

CMD [ "php", "artisan", "queue:work" ]