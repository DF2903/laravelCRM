#app

FROM php:8.3-cli as php

RUN apt-get update -y
RUN apt-get install -y zip unzip libpq-dev libcurl4-gnutls-dev openssl git
RUN docker-php-ext-install pdo pdo_mysql bcmath

RUN pecl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis

WORKDIR /var/www
COPY . .

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer
RUN composer install

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0

#node

# FROM node:20-alpine as node

# WORKDIR /usr/src
# # COPY . .
# COPY ./package.json .

# RUN npm install --global cross-env
# RUN npm install
# #############!!!!!!!!!!!!!!
# COPY . .

# # VOLUME /var/www/node_modules 
# VOLUME /usr/src/node_modules 

# EXPOSE 3000

# # CMD npm run dev