#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0);pwd);
cd $SCRIPT_DIR/roles

exit_on_fail () {
    echo failed clone $0
    exit -1
}

rm -rf ./*

CLONE_URL=https://github.com/simpart/pb-init-cent7.git
git clone $CLONE_URL init
if [ $? -ne 0 ]; then
    exit_on_fail $CLONE_URL
fi

CLONE_URL=https://github.com/simpart/pb-build-mofenv.git
git clone $CLONE_URL mofron
if [ $? -ne 0 ]; then
    exit_on_fail $CLONE_URL
fi

CLONE_URL=https://github.com/simpart/pb-build-phpweb.git
git clone $CLONE_URL phpweb
if [ $? -ne 0 ]; then
    exit_on_fail $CLONE_URL
fi

echo initialize is successful
