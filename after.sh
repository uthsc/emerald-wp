#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

#install wp-cli
mkdir /home/vagrant/bin
curl -s https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar > /home/vagrant/bin/wp
chmod 755 /home/vagrant/bin/wp

#create public directory
mkdir /home/vagrant/emerald-wp/public/
cd /home/vagrant/emerald-wp/public/
#download wp core
/home/vagrant/bin/wp core download
#create wp-config file
/home/vagrant/bin/wp core config --dbname=homestead --dbuser=homestead --dbpass=secret --extra-php <<PHP
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
PHP
#install wp
/home/vagrant/bin/wp core install --url=homestead.app --title=Homestead --admin_user=homestead --admin_password=secret --admin_email=webmaster@uthsc.edu
#symlink theme to themes directory
ln -s /home/vagrant/emerald-wp/emerald-wp  /home/vagrant/emerald-wp/public/wp-content/themes/emerald-wp
#activate theme
/home/vagrant/bin/wp theme activate emerald-wp
