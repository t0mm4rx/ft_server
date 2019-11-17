FROM debian:buster

RUN echo '\e[36m\e[1m=== Updating system ===\e[0m'
RUN apt -y update
RUN apt -y upgrade

RUN echo ' \e[36m\e[1m=== Installing MariaDB ===\e[0m'
RUN apt install -y mariadb-server mariadb-client

RUN echo ' \e[36m\e[1m=== Installing PHP ===\e[0m'
RUN apt install -y php php-mysql php-fpm

RUN echo ' \e[36m\e[1m=== Installing NGINX ===\e[0m'
RUN apt install -y nginx

RUN echo ' \e[36m\e[1m=== Installing tools ===\e[0m'
RUN apt install -y curl
RUN apt install -y vim
RUN apt install -y wget

RUN echo ' \e[36m\e[1m=== Copying content ===\e[0m'
RUN mkdir /home/root/
RUN mkdir /home/root/www
COPY srcs/localhost ./home/root/localhost
COPY srcs/www /home/root/www
COPY srcs/services.sh /home/root/
RUN chown -R www-data:www-data /home/root/www/*
RUN chmod -R 755 /home/root/www/*
RUN mv /home/root/localhost /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
COPY srcs/ft_server.sql /home/root/

RUN echo ' \e[36m\e[1m=== Installing PHPMyAdmin ===\e[0m'
WORKDIR /home/root/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.1/phpMyAdmin-4.9.1-english.tar.gz
RUN mkdir /home/root/www/phpmyadmin
RUN tar xzf phpMyAdmin-4.9.1-english.tar.gz --strip-components=1 -C /home/root/www/phpmyadmin

RUN echo ' \e[36m\e[1m=== Installing SSL ===\e[0m'
RUN mkdir /home/root/mkcert
WORKDIR /home/root/mkcert
RUN wget https://github.com/FiloSottile/mkcert/releases/download/v1.1.2/mkcert-v1.1.2-linux-amd64
RUN mv mkcert-v1.1.2-linux-amd64 mkcert
RUN chmod +x mkcert
RUN ./mkcert -install
RUN ./mkcert localhost

RUN echo ' \e[36m\e[1m=== Starting services ===\e[0m'
CMD bash /home/root/services.sh && /bin/sh

EXPOSE 80
EXPOSE 443
