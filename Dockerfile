FROM php:7.4-apache
COPY version2/ /var/www/html
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
EXPOSE 80
