Mortar
======

Skeleton application for the Brick framework.
This is a more complete implementation adding dependency injection, and injection of request parameters
into controller actions.

How to run it
-------------

Install the dependencies with [composer](http://getcomposer.org/):

    cd /path/to/mortar
    composer update

This will create a `vendor` directory containing Brick and any other dependency.

Now create a virtual host in `httpd.conf` pointing to the `public` directory:

    <VirtualHost *:80>
	    ServerName mortar.localhost
	    DocumentRoot /path/to/mortar/public
    </VirtualHost>

Then restart Apache.

Finally, create an entry for this virtual host in your `hosts` file:

    127.0.0.1 mortar.localhost

You should now be able to open the application:

http://mortar.localhost/
