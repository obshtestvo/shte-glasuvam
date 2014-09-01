#!/bin/bash
sudo cp -rv * /var/www/glasuvam
sudo cp -rv .[a-zA-Z0-9]* /var/www/glasuvam
sudo chown -R www-data:www-data /var/www/glasuvam/