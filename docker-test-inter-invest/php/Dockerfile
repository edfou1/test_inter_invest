FROM php:7.4.1-apache

RUN apt-get update
RUN apt-get install -y vim wget zip unzip zlib1g-dev libzip-dev
RUN docker-php-ext-install pdo pdo_mysql zip
RUN apt-get install -y git

# configure unit test
WORKDIR /tmp
RUN wget http://xdebug.org/files/xdebug-2.9.8.tgz
RUN tar -xvzf xdebug-2.9.8.tgz
WORKDIR /tmp/xdebug-2.9.8
RUN phpize
RUN ./configure
RUN make
RUN cp modules/xdebug.so /usr/local/lib/php/extensions/no-debug-non-zts-20190902
RUN echo "zend_extension = /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so" >> /usr/local/etc/php/php.ini
RUN a2enmod rewrite headers

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# install symfony cli
RUN wget https://get.symfony.com/cli/installer -O - | bash && mv /root/.symfony5/bin/symfony /usr/local/bin/symfony
RUN git config --global user.email "merlin.delannoy@premista.fr" \
    && git config --global user.name "moi"

WORKDIR /var/www/html
