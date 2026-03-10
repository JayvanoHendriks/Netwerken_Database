# Project for using PHP OOP functions and tests

## technical information:
PHP version: 7.4.12 (echo 'PHP version: ' . phpversion();)
MySQL database: 8.0.19 (SHOW VARIABLES LIKE '%version%';)



## site information
As example derived from:

https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

## Api example

https://codeofaninja.com/2017/02/create-simple-rest-api-in-php.html

example api's:

http://localhost/api/product/read.php
http://localhost/api/product/create.php (post)

{
    "name" : "Amazing Pillow 2.0",
    "price" : "199",
    "description" : "The best pillow for amazing programmers.",
    "category_id" : 2,
    "created" : "2018-06-01 00:35:07"
}

http://localhost/api/product/read_one.php?id=60

http://localhost/api/product/update.php (post)
{
    "id" : "106",
    "name" : "Amazing Pillow 3.0",
    "price" : "255",
    "description" : "The best pillow for amazing programmers.",
    "category_id" : 2,
    "created" : "2018-08-01 00:35:07"
}

http://localhost/api/product/delete.php (post)
{
    "id" : "106"
}

http://localhost/api/product/search.php?s=shirt

http://localhost/api/product/read_paging.php

http://localhost/api/category/read.php


## api better URI

Normal input (example)
http://localhost/rest/api.php?order_id=15478959

Above URL is not user friendly, therefore we will rewrite URL through the **.htaccess** file, copy paste the following rule in **.htaccess** file.

RewriteEngine On    # Turn on the rewriting engine

RewriteRule ^api/([0-9a-zA-Z_-]*)$ api.php?order_id=$1 [NC,L]

Now you can get the transaction information by browsing the following URL.

http://localhost/rest/api/15478959

## init
create mysql database and user who has rights on that database. Run the init.sql script that can be found in the init directory
