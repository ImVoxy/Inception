FROM debian:buster

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get -y update && \
	apt-get install -y ca-certificates apt-transport-https software-properties-common lsb-release wget gnupg2
RUN wget https://packages.sury.org/php/apt.gpg && apt-key add apt.gpg
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
RUN apt -y update
RUN apt-get -y update
RUN apt -y install php7.4
#	apt-get install -y php7.3 php7.3-fpm php7.3-cli php7.3-json php7.3-pdo php7.3-mysql php-common php7.3-opcache  php7.3-readline php7.3-intl php-xmlrpc php7.3-common && \
#	apt-get install -y php7.3-zip php7.3-gd php7.3-mbstring php7.3-curl php7.3-xml php7.3-bcmath && \
#	apt-get install -y php-fpm php-cli php-mysql php-json php-mbstring php-xml && \
RUN apt-get install sudo php7.4-cli php7.4-curl php7.4-mysql php7.4-fpm php7.4-gd php7.4-xml php7.4-mbstring php7.4-zip php7.4-soap php7.4-dev -y && \
	apt-get install -y mariadb-client && \
	apt-get install -y vim && \
	apt-get install -y curl &&\
	mkdir -p /run/php && \
	mkdir -p /var/www/html

EXPOSE 9000

RUN update-alternatives --set php /usr/bin/php7.4
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN wp core download --allow-root --path=/var/www/html
RUN chown -R www-data /var/www/html
RUN cd /var/www/html
#COPY conf/wp-config.php /var/www/html/wp-config.php

RUN service php7.4-fpm start
RUN service php7.4-fpm stop


COPY tools/index.html /var/www/html/
COPY conf/www.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY tools/php.ini /etc/php/7.4/fpm/php.ini
COPY tools/wpexec.sh  ./

ENTRYPOINT ["/bin/bash", "/wpexec.sh"]
