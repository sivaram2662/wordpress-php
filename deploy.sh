#!/bin/bash
unzip wordpress.zip 
sudo rm -fr /var/www/html/*
sudo cp -r * /var/www/html
rm -fr *.zip *.php wp-admin wp-content wp-includes *.html
