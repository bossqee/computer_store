# เปลี่ยนจาก php:8.2-apache เป็น php:7.4-apache
FROM php:7.4-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
COPY . /var/www/html/
EXPOSE 80