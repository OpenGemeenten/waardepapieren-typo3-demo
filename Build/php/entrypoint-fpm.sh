#!/usr/bin/env bash
/opt/local/entrypoints/init-local-user.sh

#ln -s /usr/sbin/php-fpm7.3 /usr/sbin/php-fpm;

php-fpm -F
