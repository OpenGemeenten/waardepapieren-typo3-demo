#!/usr/bin/env bash

if [[ -z "{$SSH_AUTH_SOCK}" ]]; then
    ssh-agent
fi

LOCAL_USER_ID=$(id -u) LOCAL_GROUP_ID=$(id -g) docker-compose "$@"
