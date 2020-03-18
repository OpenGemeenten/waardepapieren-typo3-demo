#!/usr/bin/env bash
command="composer $@"

bin/docker-compose.sh exec php /bin/su docker -c "${command}"
