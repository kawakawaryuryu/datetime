FROM php:latest

WORKDIR /app
ADD . /app

CMD php -S 0.0.0.0:80
