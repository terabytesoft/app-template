<p align="center">
    <a href="https://github.com/terabytesoft/app-template-basic" target="_blank">
        <img src="https://farm1.staticflickr.com/887/27875183957_69a3645a56_q.jpg" height="100px;">
    </a>
    <h1 align="center">Yii 3.0 Web Project Skeleton Application Basic</h1>
    <br>
</p>

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Build Status](https://scrutinizer-ci.com/g/terabytesoft/app-template-basic/badges/build.png?b=master)](https://scrutinizer-ci.com/g/cjtterabytesoft/app/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/terabytesoft/app-template-basic/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/cjtterabytesoft/app/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/terabytesoft/app-template-basic/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Maintainability](https://api.codeclimate.com/v1/badges/fe720f0219c23dc3e237/maintainability)](https://codeclimate.com/github/terabytesoft/app-template-basic/maintainability)
[![Total Downloads](https://poser.pugx.org/terabytesoft/app-template-basic/downloads)](https://packagist.org/packages/terabytesoft/app-template-basic)


DIRECTORY STRUCTURE
-------------------

```
config/             contains application configurations
public/             contains the entry script for a web server
runtime/            contains files generated during runtime
tests/              contains various tests for the basic application
vendor/             contains dependent 3rd-party packages
```

REQUIREMENTS
------------
 
The minimum requirement by this project template that your Web server supports PHP 7.1.

INSTALLATION
------------

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability=dev terabytesoft/app-template myapp
~~~

Now you should be able to access the application through the following URL, assuming `public` is the directory
directly under the Web root.

~~~
http://localhost/
~~~

CONFIGURATION
-------------

```
return [
    'app.id' => 'app-basic',
    'app.name' => 'My Project Basic',
    'adminEmail' => 'admin@example.com',
    'debug.allowedIPs' => ['127.0.0.1'],    
    'db.dsn' => 'mysql:host=localhost;dbname=app_basic;charset=utf8',
    'db.username' => 'app_basic',
    'db.password' => 'your_password',
    'favicon.ico' => '@yii/app/../public/favicon.ico',
    'i18n.locale' => 'en-US',
];
```

### MIGRATIONS:

```
php vendor/bin/yii migrate/up --migrationPath=@migrations
Apply the above migration? (yes|no) [no]:yes
```

### WEB SERVER SUPPORT:

- Apache.
- Nginx.
- OpenLiteSpeed.

### [DOCUMENTATION STYLE GUIDE.](docs/DOCUMENTATION.md)

**LICENSE:**

[![License](https://poser.pugx.org/terabytesoft/app-template-basic/license)](https://packagist.org/packages/terabytesoft/app-template-basic)

**NOTES:**

- Check and edit the other files in the `config/` directory to customize your application as required.
