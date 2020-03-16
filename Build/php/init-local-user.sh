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

groupName=$(getent group ${LOCAL_GROUP_ID} | cut -d: -f1)
