#!/usr/bin/env bash

command="/var/www/vendor/bin/typo3cms $@"

bin/docker-compose.sh exec php /bin/su docker -c "${command}"
