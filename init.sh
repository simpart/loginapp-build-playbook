#!/bin/bash

#echo test
SCRIPT_DIR=$(cd $(dirname $0);pwd);
cd $SCRIPT_DIR/roles
git clone https://github.com/simpart/cent7-init-playbook.git
git clone https://github.com/simpart/mofron-env-playbook.git

echo initialize is successful
