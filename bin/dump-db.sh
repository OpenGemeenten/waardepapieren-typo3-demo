#!/usr/bin/env bash

command="cd /dumps && mysqldump -uapp -ppassword app > app.sql"

bin/docker-compose.sh exec database /bin/bash -c "${command}"
sudo chmod 0777 Build/database/app.sql
