#!/bin/bash

service mysql start
mariadb < /var/www/phpmyadmin/sql/new_tab.sql
service php7.3-fpm start
service nginx start

echo "***** Server successfully started! *****"
bash