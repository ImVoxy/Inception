#!/bin/bash
mysql -e "CREATE DATABASE IF NOT EXISTS db;"
mysql -e "USE db;"
mysql -e "CREATE USER '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD';"
mysql -e "GRANT ALL ON db TO '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD' WITH GRANT OPTION;"
mysql -e "FLUSH PRIVILEGES;"
mysqld;
