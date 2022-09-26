FROM debian:buster

ENV DEBIAN_FRONTEND noninteractive

USER root

#ARG	MYSQL_USER=inceptionuser \
#	MYSQL_PASSWORD=inceptionpwd

RUN apt-get -y update && \
	apt-get install -y vim && \
	apt-get install -y mariadb-server;

EXPOSE 3306

COPY tools/mariadb-init.sh /var/www/html/mariadb-init.sh
#COPY conf/my.cnf /etc/mysql/my.cnf

#RUN touch /var/www/html/test.sh

#RUN echo '#!/bin/bash' >> /var/www/html/test.sh
#RUN echo 'mysql -e "CREATE DATABASE IF NOT EXISTS db";' >> /var/www/html/test.sh
#RUN echo 'mysql -e "CREATE USER '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD'";' >> /var/www/html/test.sh
#RUN echo 'mysql -e "GRANT ALL ON db TO '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD' WITH GRANT OPTION";' >> /var/www/html/test.sh
#RUN echo 'mysql -e "FLUSH PRIVILEGES";' >> /var/www/html/test.sh
#RUN echo 'mysqld;' >> /var/www/html/test.sh

RUN chmod 777 /var/www/html/mariadb-init.sh
#RUN chmod 644 /etc/mysql/my.cnf
RUN mkdir /run/mysqld
RUN chmod -R 777 /run/mysqld
RUN chmod -R 777 /var/run/mysqld

#ENTRYPOINT ["mysqld"]
ENTRYPOINT ["sh", "/var/www/html/mariadb-init.sh"]
