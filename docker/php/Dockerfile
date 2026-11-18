FROM php:8.5-apache

RUN a2enmod rewrite
COPY docker/php/apache.conf /etc/apache2/conf-available/dennie-tour.conf
RUN a2enconf dennie-tour
COPY docker/php/php.ini /usr/local/etc/php/conf.d/local.ini

