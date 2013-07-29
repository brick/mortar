Mortar
======

Skeleton application for the Brick framework.

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

Finally, create an entry for this virtual host in your `hosts` file:

    127.0.0.1 mortar.localhost

You should now be able to browse the examples:

* http://mortar.localhost/
* http://mortar.localhost/index/hello?name=John

