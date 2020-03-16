#!/usr/bin/env bash

USER_ID=${LOCAL_USER_ID:-9001}
GROUP_ID=${LOCAL_GROUP_ID:-9001}

userExists=$(getent passwd ${USER_ID})
groupExists=$(getent group ${GROUP_ID})

if [ "${groupExists}" == "" ]; then
    addgroup \
      --gid ${GROUP_ID} \
      dockerlocal
fi

if [ "${userExists}" == "" ]; then
    adduser \
      --shell /bin/bash \
      --uid ${USER_ID} \
      --gid ${GROUP_ID} \
      --system \
      docker
fi

export LOCAL_GROUP_NAME=$(getent group 1000 | cut -d: -f1)
GROUP_NAME=${LOCAL_GROUP_NAME} envsubst < /etc/php/7.3/fpm/template-www.conf > /etc/php/7.3/fpm/pool.d/www.conf
