FROM php:8.1-apache

ADD . /var/www/html

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    service apache2 restart

EXPOSE 80
EXPOSE 443