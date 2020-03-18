#!/usr/bin/env bash

bin/docker-compose.sh up -d
bin/restore-db.sh
