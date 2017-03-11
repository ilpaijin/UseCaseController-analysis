FROM php:7

COPY ./ /var/www/ucc

WORKDIR /var/www/ucc
#ENTRYPOINT ["php", "-S", "0.0.0.0:3000", "-t", "public", "&"]