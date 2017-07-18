#!/bin/bash

# Start mysql service
service mysql start

# Add tables
mysql -u root < /tmp/database.sql
mysqladmin -u root password your_root_password

# Add permissive OPcache folder permissions
while [ 1 ]; do chmod -R 777 /tmp; sleep 60; done &

# Fix for sendmail
echo 127.0.0.1 localhost.localdomain localhost `hostname` >> /etc/hosts

# Start apache2
cd /var/www/html
apache2-foreground
