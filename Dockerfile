FROM webdevops/php-nginx:8.3-alpine

RUN apk add oniguruma-dev libxml2-dev
RUN docker-php-ext-install \
        bcmath \
        ctype \
        fileinfo \
        mbstring \
        pdo_mysql \
        xml

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk add nodejs npm

ENV WEB_DOCUMENT_ROOT /app/src/public
ENV APP_ENV production
WORKDIR /app
COPY . .

RUN cp -n src/.env.example src/.env

WORKDIR /app/src
RUN composer install --no-interaction --optimize-autoloader --no-dev
RUN php artisan key:generate
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

RUN composer require laravel/breeze --dev

RUN npm install
RUN npm run build

RUN chown -R application:application .
