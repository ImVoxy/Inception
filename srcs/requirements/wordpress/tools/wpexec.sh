#!/bin/bash

cd /var/www/html
sleep 5

wp config create --dbname=$MYSQL_DATABASE --dbuser=$MYSQL_USER --dbpass=$MYSQL_PASSWORD --dbhost=mariadb --dbprefix=wp_ --allow-root
wp core install --allow-root --url="alpascal.42.fr" --title="alpascal site" --admin_user=$MYSQL_USER --admin_password=$MYSQL_PASSWORD --admin_email=$MYSQL_EMAIL
wp user create --allow-root $WORDPRESS_USER $WORDPRESS_EMAIL --role=subscriber --user_pass=$WORDPRESS_PASSWORD
wp theme activate twentytwentytwo --allow-root --path=/var/www/html

exec php-fpm7.4 -F
