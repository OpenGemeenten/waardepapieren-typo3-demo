#!/usr/bin/env bash
/opt/local/entrypoints/init-local-user.sh

LOCAL_GROUP_NAME=$(getent ${LOCAL_GROUP_ID} | cut -d: -f1) envsubst < /etc/php/7.3/fpm/template-www.conf > /etc/php/7.3/fpm/pool.d/www.conf

php-fpm -F
