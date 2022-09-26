FROM debian:buster

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get -y update && \
	apt-get install -y php7.3 php7.3-fpm php7.3-cli php7.3-json php7.3-pdo php7.3-mysql php-common php7.3-opcache  php7.3-readline php7.3-intl php-xmlrpc php7.3-common && \
	apt-get install -y php7.3-zip php7.3-gd php7.3-mbstring php7.3-curl php7.3-xml php7.3-bcmath && \
	apt-get install -y vim && \
	apt-get install -y curl &&\
	mkdir -p /run/php && \
	mkdir -p /var/www/html

RUN curl -k https://wordpress.org/latest.tar.gz --output /tmp/wp.tar.gz
RUN tar xzf /tmp/wp.tar.gz --strip-components=1 -C /var/www/html/

RUN service php7.3-fpm start
RUN service php7.3-fpm stop


COPY tools/index.html /var/www/html/
COPY tools/www.conf /etc/php/7.3/fpm/pool.d/
COPY tools/php.ini /etc/php/7.3/fpm/php.ini

EXPOSE 9000

#CMD ["tail", "-f", "/dev/null"]
CMD ["usr/sbin/php-fpm7.3", "-F", "-R"]
