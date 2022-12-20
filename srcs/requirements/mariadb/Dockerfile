FROM debian:buster

ENV DEBIAN_FRONTEND noninteractive

USER root

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get install -y mariadb-server
RUN apt-get install -y mariadb-client
RUN apt-get install -y procps
RUN apt-get install -y gettext-base

EXPOSE 3306

RUN mkdir /var/run/mysqld
RUN touch /run/mysqld/mysqld.pid
RUN touch /run/mysqld/mysqld.sock
RUN chown mysql:mysql -R /run/mysqld
COPY tools/mariadb-init.sh ./
COPY tools/db.sql ./
COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod -R 777 ./mariadb-init.sh

ENTRYPOINT ["/bin/bash", "/mariadb-init.sh"]
