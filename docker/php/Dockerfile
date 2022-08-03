FROM php:8.1

RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli 
COPY . . 
RUN chmod +x composerInstall.sh && \ 
./composerInstall.sh && \ 
mv composer.phar /usr/local/bin/composer
RUN apt-get install --yes zip
RUN apt-get install --yes git
WORKDIR /var/www/
EXPOSE 8000
CMD ["tail", "-f", "/dev/null"] 