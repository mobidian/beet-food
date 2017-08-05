<h1 align="center">Food ordering system</h1>

<img src="http://tour-v-bukovel.kiev.ua/wp-content/uploads/2015/01/%D0%A0%D0%B5%D1%81%D1%82%D0%BE%D1%80%D0%B0%D0%BD%D1%8B-%D0%91%D1%83%D0%BA%D0%BE%D0%B2%D0%B5%D0%BB%D1%8C.jpg">

> This project created in educational purposes in scope of PHP-course which is conducted in Beetroot company in 2017.

> Created by Yurii Svystun (svystun@gmail.com).

## Installation for Linux (more cool)

1. You should have account on github.com (Register: https://github.com/join)

2. Open your terminal window.

3. Check if you have installed `composer`:

    ``` 
    $ composer -V 
    ```
    You should see something like this:
    ``` 
    $ Composer version 1.4.1 2017-03-10 09:29:45
    ```
4. Check PHP7 installation (minimum version: 5.6.x):

    ``` 
    $ php -v 
    ```
    You should see something like this:
    ``` 
    PHP 7.1.6-1~ubuntu16.04.1+deb.sury.org+1 (cli) (built: Jun  9 2017 08:26:34) ( NTS )
    Copyright (c) 1997-2017 The PHP Group
    Zend Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies
        with Zend OPcache v7.1.6-1~ubuntu16.04.1+deb.sury.org+1, Copyright (c) 1999-2017, by Zend Technologies
        with Xdebug v2.5.5, Copyright (c) 2002-2017, by Derick Rethan
    ```
5. Check PHP7 extensions:
    
    ``` 
    $ php -m
    ```
    You should see something like this:
    ```
    - openssl
    ...
    - PDO, pdo_mysql
    ...
    - mbstring
    ...
    - tokenizer
    ...
    - xml
    ```
6. Clone this repository (Ubuntu 14.04/16.04):

    ```
    $ cd ~
    
    $ sudo mkdir www (skip if exists)
    
    $ cd www
    
    $ git clone git@github.com:svystun/beet-food.git // For Windows OS you can start from here:
    
    $ cd beet-food
    
    $ composer install
    
    // Create database via PhpMyadmin
    
    $ cp .env.example .env // Copy .env.example to .env and adjust to your local setup of DB
    
    $ php artisan key:generate
    
    $ php artisan migrate
    
    $ npm install // Install javascript dependencies 
    
    $ npm run dev // Run webpack
    ```
7. Create virtual host on your local PC (Ubuntu 14.04/16.04). (For Windows OS you can use Openserver or Xampp)
    
    Create config file for virtual host `mvc.dev`:
    ```
    $ sudo nano /etc/apache2/sites-available/beet-food.conf
    ```
    Copy and paste this config:
    
    ```
    <VirtualHost *:80>
            ServerName beet-food.dev
            ServerAlias www.beet-food.dev
            ServerAdmin webmaster@beet-food.dev
            DocumentRoot /home/{username}/www/beet-food/public
            <Directory "/home/{username}/www/beet-food/public">
                    Allowoverride All
            </Directory>
            ErrorLog ${APACHE_LOG_DIR}/error.log
            CustomLog ${APACHE_LOG_DIR}/access.log combined
    </VirtualHost>
    ```
    Add host `beet-food.dev` to `/etc/hosts`:
    ```
    $ sudo nano /etc/hosts
    ```
    Add this line to the end of file:
    ```
    127.0.0.1  beet-food.dev
    ```
    Enable `beet-food.dev` virtual host:
    ```
    $ sudo a2ensite beet-food.conf
    ```
    Enable rewrite mode for server Apache2:
    ````
    $ sudo a2enmod rewrite
    ````
    Restart server Apache2:
    ````
    sudo service apache2 restart
    ````
    
Open browser and go to url: http://beet-food.dev

## Contributing

Contributors of this project is students of PHP-training.

## Security Vulnerabilities

If you discover a security vulnerability this project, please send an e-mail to Yurii Svystun (svystun@gmail.com). All security vulnerabilities will be promptly addressed.

## License

Project based on Laravel 5.4.xx framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

<p align="center"><a href="https://www.beetroot.se"><img src="https://beetroot.se/wp-content/uploads/2016/04/logo.svg"></a></p>