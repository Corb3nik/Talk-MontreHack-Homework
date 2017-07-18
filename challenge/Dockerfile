FROM php:7.0-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install opcache

# Install mysql
RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install mysql-server -q -y
RUN DEBIAN_FRONTEND=noninteractive apt-get install sendmail -q -y

# Copy SQL folders
COPY ./src/sql/database.sql /tmp/database.sql
COPY ./src/sql/custom.cnf /etc/mysql/conf.d/custom.cnf

# Copy flag file
COPY flag.txt /th3_fl4g_i5_h3r3.txt

# Copy php.ini file
COPY php.ini /usr/local/etc/php/php.ini
RUN mkdir /tmp/opcache

# Hardening
COPY ./src /var/www/html/
RUN chown www-data /var/www/html/upload
RUN chgrp www-data /var/www/html/upload
RUN chmod 700 /var/www/html/upload

# Start script
COPY ./start.sh /start.sh
CMD ["bash", "/start.sh"]
