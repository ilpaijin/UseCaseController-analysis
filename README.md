# UseCaseController analysis

###### Analysis of a possible usage of the UseCaseController pattern

###Usage
- run `composer install`
- build the image `docker build -t ucc-analysis .`
- run the container `docker run -it -p 3000:3000 -v {yourfolderproject}:/var/www/ucc ucc-analysis bash`
- run in the container bash `php -S 0.0.0.0:3000 -t public`
- check the available endpoints:
- - `/orders`
- - `/orders/1`