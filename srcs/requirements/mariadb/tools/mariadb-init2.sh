#!/bin/bash
service mysql start;
#mysql -e "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE;";
#mysql -e "USE $MYSQL_DATABASE;CREATE USER '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD';";
#mysql -e "USE $MYSQL_DATABASE;GRANT ALL PRIVILEGES ON $MYSQL_DATABASE TO '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD';";
#mysql -e "FLUSH PRIVILEGES;";

#mysql -e "CREATE DATABASE IF NOT EXISTS db;";
#mysql -e "USE db;CREATE USER 'inceptionuser' IDENTIFIED BY 'inceptionpwd';";
#mysql -e "USE db;GRANT ALL ON db.* TO 'inceptionuser' IDENTIFIED BY 'inceptionpwd';";
#mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY 'inceptionpwd';"
#mysql -e "FLUSH PRIVILEGES;";

#mysql < /var/run/mysqld/db.sql;

service mysql stop;
exec mysqld-safe;
