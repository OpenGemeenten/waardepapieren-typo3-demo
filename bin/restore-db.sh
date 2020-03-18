#!/usr/bin/env bash

read -p "Do you want to restore the database from previous dump? y/N " -n 1 -r

if [[ $REPLY =~ ^[Yy]$ ]]; then

command="cd /dumps && mysql -uapp -ppassword app < app.sql"
bin/docker-compose.sh exec database /bin/bash -c "${command}"

fi
