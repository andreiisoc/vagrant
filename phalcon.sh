#!/usr/bin/env bash

echo "Installing Phalcon"
apt-add-repository ppa:phalcon/stable
apt-get update >/dev/null 2>&1
sudo apt-get install -y php5-phalcon >/dev/null 2>&1
service apache2 restart