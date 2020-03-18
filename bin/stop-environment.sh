#!/usr/bin/env bash

read -p "Do you want to dump the current database state? this overrides previous dumped sql file y/N " -n 1 -r

if [[ $REPLY =~ ^[Yy]$ ]]; then

bin/dump-db.sh

fi

bin/docker-compose.sh down
