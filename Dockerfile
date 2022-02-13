FROM php:7.4-apache
COPY index.php /var/www/html/
RUN chown -Rv www-data:www-data /var/www/html
RUN chmod 774 /var/www/html/index.php
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
