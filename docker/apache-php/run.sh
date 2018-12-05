#!/bin/bash

set -e
set -u

echo "Starting ..."

echo 'eval "$(ssh-agent -s)"' > ~/.bashrc
echo 'ssh-add ~/.ssh/id_rsa_me' >> ~/.bashrc

apache2ctl -DFOREGROUND
