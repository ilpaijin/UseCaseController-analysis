FROM php:7

#COPY ./ /var/www/ucc

WORKDIR /var/www/ucc

EXPOSE 3000

CMD ["php", "-S", "0.0.0.0:3000", "-t", "public"]