FROM debian:buster

ENV DEBIAN_FRONTEND noninteractive

USER root

RUN apt-get -y update && \
	apt-get install -y nginx && \
	apt-get install -y openssl && \
	mkdir -p /etc/nginx/ssl && \
	openssl req -x509 -nodes -days 365 -subj "/C=FR/ST=IDF/L=PARIS/O=alpascal/CN=alpascal.42.fr" -newkey rsa:4096 \
	-keyout /etc/nginx/ssl/selfsigned.key \
	-out /etc/nginx/ssl/selfsigned.crt;

COPY conf/nginx.conf /etc/nginx/sites-available/default
COPY tools/index.html /var/www/html
COPY tools/42_Logo.png /var/www/html

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
