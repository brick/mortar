Mortar
======

Skeleton application for the Brick framework.

How to run it
-------------

First install the dependencies with [composer](http://getcomposer.org/):

    cd /path/to/mortar
    composer update

### Method 1: using PHP's built-in web server

This is the quickest and easiest way to start playing with the application:

    cd /path/to/mortar/public
    php -S localhost:8000 index.php

Just point your browser to `http://localhost:8000/` and you should get the welcome page.

### Method 2: using Apache

To host permanently the application on your development machine, create a virtual host in `httpd.conf` pointing to the `public` directory:

    <VirtualHost *:80>
	    ServerName mortar.localhost
	    DocumentRoot /path/to/mortar/public

        # This ensures that the .htaccess directives will be taken into account
	    <Directory "/path/to/mortar/public">
	        AllowOverride All
	    </Directory>
    </VirtualHost>

Restart Apache, then create an entry for this virtual host in your [hosts file](http://www.rackspace.com/knowledge_center/article/how-do-i-modify-my-hosts-file):

    127.0.0.1 mortar.localhost

Now point your browser to `http://mortar.localhost/` and you should get the welcome page.