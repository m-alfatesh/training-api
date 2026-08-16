FROM php:8.3-cli

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
