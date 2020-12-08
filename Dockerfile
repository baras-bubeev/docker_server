# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mpowder <mpowder@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/02 15:00:53 by mpowder           #+#    #+#              #
#    Updated: 2020/12/08 21:44:41 by mpowder          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
LABEL maintainer="mpowder"

EXPOSE 80 443

RUN	apt-get update && apt-get upgrade && apt-get install -y \
	vim curl nginx mariadb-server php-fpm php-mysql php-mbstring

WORKDIR /var/www/

RUN	curl -o wordpress.tar.gz https://ru.wordpress.org/latest-ru_RU.tar.gz && \
	tar -xvf wordpress.tar.gz && rm -rf wordpress.tar.gz && \
	curl -o phpmyadmin.tar.gz \
	https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz \
	&& tar -xvf phpmyadmin.tar.gz && rm -rf phpmyadmin.tar.gz && \
	mv phpMyAdmin-5.0.4-all-languages phpmyadmin

COPY /srcs/run.sh /var/
COPY /srcs/wp-config.php /var/www/wordpress/
COPY /srcs/config.inc.php /var/www/phpmyadmin/
COPY /srcs/new_tab.sql /var/www/phpmyadmin/sql/
COPY /srcs/nginx.conf /etc/nginx/sites-available/
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/

WORKDIR /etc/nginx/ssl/

RUN	openssl req -newkey rsa:2048 -x509 -days 365 -nodes -out new.crt -keyout new.key \
    -subj "/C=RU/ST=Tatarstan/L=Kazan/O=21-School/OU=Ignis/CN=mpowder"

WORKDIR /etc/nginx/sites-available/

CMD bash /var/run.sh