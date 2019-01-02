<p align="center">
    <a href="https://github.com/terabytesoft/app-template-basic" target="_blank">
        <img src="https://farm1.staticflickr.com/887/27875183957_69a3645a56_q.jpg" height="100px;">
    </a>
    <h1 align="center">Yii 3.0 Web Project Skeleton Application Basic</h1>
</p>

</br>

<p align="center">
    <a href="https://www.yiiframework.com/" target="_blank">
        <img src="https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)" alt="Yii Framework">
    </a>
    <a href="https://travis-ci.org/terabytesoft/app-template-basic.svg?branch=master" target="_blank">
        <img src="https://travis-ci.org/terabytesoft/app-template-basic.svg?branch=master" alt="Build Status">
    </a>
    <a href="https://codeclimate.com/github/terabytesoft/app-template-basic/maintainability" target="_blank">
        <img src="https://api.codeclimate.com/v1/badges/fe720f0219c23dc3e237/maintainability" alt="Maintainability">
    </a>
    <a href="https://packagist.org/packages/cjtterabytesoft/app-template-basic" target="_blank">
        <img src="https://poser.pugx.org/terabytesoft/app-template-basic/downloads" alt="Total Downloads">
    </a>
</p>


DIRECTORY STRUCTURE
-------------------

```
config/             contains application configurations
public/             contains the entry script for a web server
node_modules/       contains assets
runtime/            contains files generated during runtime
tests/              contains various tests for the basic application
vendor/             contains dependent 3rd-party packages
```

REQUIREMENTS
------------
 
The minimum requirement by this project template that your Web server supports PHP 7.1.

INSTALLATION
------------

<p align="justify">
If you do not have <a href="http://getcomposer.org/" title="Composer" target="_blank">composer</a>, you may install it by following the instructions at <a href="http://getcomposer.org/doc/00-intro.md#installation-nix" title="getcomposer.org" target="_blank">getcomposer.org</a>.
</p>

<p align="justify">
If you do not have <a href="https://www.npmjs.com/" title="npm" target="_blank">npm</a>, you may install it by following the instructions
at <a href="https://www.npmjs.com/get-npm" title="get npm" target="_blank">get npm</a> .
</p>

<p align="justify">
Yii 3.0 manages the assets independently with Foxy, everything is installed in the /node_modules directory, it is essential to have installed <strong>nodejs, npm, and yarn</strong>.
</p>

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability=dev terabytesoft/app-template-basic myapp
~~~

<p align="justify">
Now you should be able to access the application through the following URL, assuming <strong>public</strong> is the directory
directly under the Web root.
</p>

~~~
http://localhost/
~~~

CONFIGURATION
-------------

```
return [
    'app.id' => 'my-project-basic',
    'app.name' => 'My Project Basic',
    'adminEmail' => 'admin@example.com',
    'debug.allowedIPs' => ['127.0.0.1'],
    'db.dsn' => 'mysql:host=localhost;dbname=your_database;charset=utf8',
    'db.username' => 'your_username',
    'db.password' => 'your_password',
    'favicon.ico' => '@yii/app/../public/favicon.ico',
    'mailer.useFileTransport' => true,
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

### [DOCUMENTATION STYLE GUIDE.](docs/documentation.md)

**LICENSE:**

[![License](https://poser.pugx.org/terabytesoft/app-template-basic/license)](https://packagist.org/packages/terabytesoft/app-template-basic)

**NOTES:**

- Check and edit the other files in the `config/` directory to customize your application as required.
