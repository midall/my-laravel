# MyLARAVEL Project

## Description
This project illustrate the simple installation of laravel framework (version 5.4.24).

## Useful links
For this project the following link provide me the essential to install and run the project: [Tutorialspoint](https://www.tutorialspoint.com/laravel/laravel_configuration.htm)

## Installation
1. Via composer run the following command: composer create-project laravel/laravel –-prefer-dist
2. The above command will create a folder "laravel" in your root directory
3. Homepage (default index) is "/laravel/public/index.php". Access it either:
    * Rename "/laravel/server.php" to "/laravel/index.php" and access the aplication in "mydomain/project/laravel"
    * Or create an alias to load the directory "/laravel/public" (example file "mylaravel.conf" including in "extrafiles" folder)
    * Or create a virtual host by adding on "apache\conf\extra\httpd-vhosts.conf"
```
<VirtualHost *:80>
	DocumentRoot c:/wamp64/www/mylaravel/laravel/public
	ServerName mylaravel.dev
</VirtualHost>
```
and on "C:\Windows\System32\drivers\etc\hosts"

```
127.0.0.1       localhost
127.0.0.1       mylaravel.dev
```

## Test Environment
- Apache 2.4.23
- PHP 7.0.10
- MySQL 5.7.14

## About me
- :link: Website: [ntallas.eu](https://ntallas.eu)
- :link: GitHub: [midall](https://github.com/midall)