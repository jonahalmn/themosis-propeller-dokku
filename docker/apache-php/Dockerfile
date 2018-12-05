FROM debian

ARG SSH_PRIV_ME

# ajoute les paquets manquants
RUN apt-get update \
  && apt-get install -y php php-fpm apache2 pdftk php-tidy php-imagick \
    dos2unix git gcc make curl vim g++ \
    ruby-dev rubygems mysql-client locales gnupg2 php-mbstring php-curl php-dom php-mysql

RUN curl -sL https://deb.nodesource.com/setup_9.x | bash -
RUN apt-get install -y nodejs

RUN gem install bundle

RUN npm install --global gulp

RUN mkdir -p /var/www/project

RUN a2enmod headers
RUN a2enmod rewrite
RUN a2enmod proxy_fcgi
RUN a2enconf php7.0-fpm

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --filename=composer --install-dir=/usr/local/bin
RUN php -r "unlink('composer-setup.php');"

ENV APACHE_RUN_SERVER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid


COPY php.ini /etc/php/7.0/fpm/php.ini
COPY php.ini /etc/php/7.0/cli/php.ini
COPY php.ini /etc/php/7.0/apache2/php.ini

# AUTHORIZE SSH HOSTdocker

RUN mkdir -p /root/.ssh && \
    chmod 0700 /root/.ssh && \
    ssh-keyscan github.com > /root/.ssh/known_hosts

COPY apache_config.conf /etc/apache2/sites-enabled/000-default.conf

COPY run.sh /bin/run.sh

RUN echo "$SSH_PRIV_ME" > /root/.ssh/id_rsa_me
RUN chmod 600 /root/.ssh/id_rsa_me

RUN dos2unix /bin/run.sh /bin/run.sh

WORKDIR /var/www/project

CMD ["/bin/run.sh"]
