FROM php:7.4-apache
COPY index.php /var/www/html/
COPY docker-config.php /var/www/html/.config.php
COPY docker-htaccess /var/www/html/.htaccess
RUN a2enmod rewrite
RUN a2enmod headers
