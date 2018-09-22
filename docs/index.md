# JPI Documentation

## Important Links

<a href="./api">Link to API reference</a>

## Installation

This guide is only tested on Ubuntu 18.04. I would recommend using Ubuntu 18.04 for production
use because of the long LTS life cycle. JPI should run on other operating systems but this is
(until now) not part of this documentation. Feel free to send a pull request with documentation
for other operating system.

### Dependencies

- PHP 7.2 or greater
- PHP-Libs: mbstring, xml, json ... TODO

### Installation Steps (Ubuntu 18.04)

1. Install Apache and with package manager. I recommend using mod_php over fpm or fcgi for
performance reason and ease of use. As JPI does not have to provide any static assets, mod_php
is the more efficient setup. JPI should run perfectly fine with fpm or fcgi.

```
sudo apt install libapache2-mod-php php-mbstring php-json
```

2. Install the Microsoft SQL-Server driver. This driver is called `sqlsrv`.
    - Install the Microsoft ODBC driver from https://docs.microsoft.com/en-us/sql/connect/php/system-requirements-for-the-php-sql-driver?view=sql-server-2017
    - Install the sqlsrv and pdo_sqlsrv driver from https://github.com/Microsoft/msphpsql/releases

3. Run installation script

```
# cd to project dir and run
php bin/console jpi:install
```

The installation script will check the dependencies and will ask you for the database connection
information. When the process is done, a `config.php` file will be created under the project
root. If you ever need to modify the connection information, check this directory.

4. Add user and grant permissions

JPI uses HTTP Basic Auth authentication. You can add new users by running the following command:

```
php bin/console jpi:user:create
```

You can check, whether the user was created successfully by running the command:

```
php bin/console jpi:user:list 
```

Now you can grant permissions to the user:

```
# list permissions of a user
php bin/console jpi:permission:show 'username'

# grant new permissions to a user
php bin/console jpi:permission:grant 'username' PRODUCT

# you can also grant multiple permissions in one step
php bin/console jpi:permission:grant 'username' PRODUCT,CUSTOMER

# you can also get a full list of users
php bin/console jpi:permission:list
```

#### Docker

TODO

## Which version is compatible with my JTL-Wawi?

That's really simple. We build a new Version of JPI for every new version of JTL-Wawi, that has changes in the
database schema. If your JTL-Wawi has version 1.3.11.2, just use version 1.3.11 from JPI.