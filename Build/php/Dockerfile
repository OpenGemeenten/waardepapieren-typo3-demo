ARG CONTEXT=production

##
## baseimage
##
FROM debian:buster-slim AS php

ARG PHP_VERSION=7.3
ARG DEBIAN_FRONTEND=noninteractive

RUN set -eux; \
    apt-get update; \
    apt-get install -y \
        apt-transport-https \
        ca-certificates \
        curl \
        gnupg2 \
        lsb-release \
        wget; \
    wget https://packages.sury.org/php/apt.gpg; \
    apt-key add apt.gpg; \
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php7.list; \
    apt-get update; \
    apt-get install -y \
        php${PHP_VERSION} \
        php${PHP_VERSION}-bcmath \
        php${PHP_VERSION}-bz2 \
        php${PHP_VERSION}-cli \
        php${PHP_VERSION}-common \
        php${PHP_VERSION}-curl \
        php${PHP_VERSION}-fpm \
        php${PHP_VERSION}-gd \
        php${PHP_VERSION}-gmp \
        php${PHP_VERSION}-intl \
        php${PHP_VERSION}-json \
        php${PHP_VERSION}-mbstring \
        php${PHP_VERSION}-mysql \
        php${PHP_VERSION}-opcache \
        php${PHP_VERSION}-soap \
        php${PHP_VERSION}-sqlite3 \
        php${PHP_VERSION}-tidy \
        php${PHP_VERSION}-xml \
        php${PHP_VERSION}-xmlrpc \
        php${PHP_VERSION}-xsl \
        php${PHP_VERSION}-zip \
        php-igbinary \
        php-imagick \
        php-redis \
        unzip; \
    apt-get clean -y; \
    apt-get autoremove -y; \
    rm -rf /var/lib/apt/lists/*; \
    ln -s /usr/sbin/php-fpm${PHP_VERSION} /usr/sbin/php-fpm; \
    mkdir -p /run/php; \
    chmod 0755 /run/php;

##
## development images
##
FROM php AS development

ARG PHP_VERSION=7.3
ARG DEBIAN_FRONTEND=noninteractive

# Install composer
COPY install-composer.sh /opt/local/install-composer.sh
RUN /opt/local/install-composer.sh

RUN set -eux; \
    mkdir -p /opt/local/composer; \
    mkdir -p /var/cache/composer; \
    chmod -R 777 /var/cache/composer;

ENV COMPOSER_CACHE_DIR="/var/cache/composer"
ENV COMPOSER_HOME="/opt/local/composer"
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV PATH="/opt/local/composer/vendor/bin:${PATH}"

# Install global composer libs
RUN set -eux; \
    composer global require "phpunit/phpunit=^7.5"; \
    rm -rf /var/cache/composer/*;

RUN set -eux; \
    apt-get update; \
    apt-get install -y \
        php-xdebug \
        gettext; \
    apt-get autoremove -y; \
    apt-get clean -y; \
    rm -rf /var/lib/apt/lists/*;

COPY init-local-user.sh /opt/local/entrypoints/init-local-user.sh
COPY entrypoint-fpm.sh /opt/local/entrypoints/entrypoint-fpm.sh
COPY entrypoint-cli.sh /opt/local/entrypoints/entrypoint-cli.sh

ENTRYPOINT ["/opt/local/entrypoints/entrypoint-cli.sh"]

CMD ["php"]

FROM php AS production

ENTRYPOINT ["/usr/bin/php"]

EXPOSE 9000

##
## Actual output image
##
FROM ${CONTEXT}
