FROM php:8.2-apache

# ติดตั้ง PHP Extensions ที่จำเป็น (เช่น PDO MySQL)
RUN docker-php-ext-install pdo pdo_mysql

# ก๊อปปี้ไฟล์ในโปรเจกต์ไปยัง Web Server
COPY . /var/www/html/

# เปิด Port 80
EXPOSE 80