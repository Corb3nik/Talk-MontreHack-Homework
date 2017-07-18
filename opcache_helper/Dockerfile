FROM php:7.0-apache
RUN docker-php-ext-install opcache

# Copy files
COPY src/  /var/www/html

# Create tmp folder
RUN chown www-data /var/www/html/tmp

# Copy php.ini file
COPY php.ini /usr/local/etc/php/php.ini
RUN mkdir /tmp/opcache
RUN chown www-data /tmp/opcache
