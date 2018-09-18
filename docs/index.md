# JPI Documentation

## Important Links

<a href="./api">Api documentation</a>

## Installation

### Requirements

- OS: Linux (Should work on Windows, too. But I develop on Linux)
- PHP 7.2 or greater
- PHP-Libs: mbstring, xml, json ... TODO

### Windows

TODO

### Linux

#### Manual Install


- Install https://docs.microsoft.com/en-us/sql/connect/php/system-requirements-for-the-php-sql-driver?view=sql-server-2017
- Install https://github.com/Microsoft/msphpsql/releases (only sqlsrv, not pdo_sqlsrv !!!)

#### Docker

TODO

## Which version is compatible with my JTL-Wawi?

That's really simple. We build a new Version of JPI for every new version of JTL-Wawi, that has changes in the
database schema. If your JTL-Wawi has version 1.3.11.2, just use version 1.3.11 from JPI.