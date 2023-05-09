FROM php:5.4-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql \
 && docker-php-ext-enable mysqli \
 && a2enmod rewrite \
 && echo 'date.timezone = "America/Fortaleza"' > /usr/local/etc/php/conf.d/timezone.ini \
 && echo 'error_log = /proc/1/fd/2' >/usr/local/etc/php/conf.d/error.ini

COPY --chown=www-data:www-data booked/ /var/www/html/

# Fixing permissions
RUN find /var/www/html/ -type d -exec chmod 755 {} + \
 && find /var/www/html/ -type f -exec chmod 644 {} +