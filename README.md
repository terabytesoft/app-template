<p align="center">
    <a href="https://github.com/terabytesoft/app-template-basic" target="_blank">
        <img src="https://lh3.googleusercontent.com/D9TFw1F6ddPuheDc_tpNptTdvTg-FNNpjLSBN14X6Sc-3JDiOxfE67rEh4OZfygonx1tKei2b2DEOHDLjF6T3xl8e-rkEEPZeGqLTWcS_v2cBRlyo0vcZLDHG5ivSDGIWCsenbol=w2400" height="50px;">
    </a>
    <h1 align="center">Project Skeleton Application Basic</h1>
</p>

<p align="center">
    <a href="https://packagist.org/packages/terabytesoft/app-template-basic" target="_blank">
        <img src="https://poser.pugx.org/terabytesoft/app-template-basic/v/unstable" alt="Unstable Version">
    </a>
    <a href="https://travis-ci.org/terabytesoft/app-template-basic" target="_blank">
        <img src="https://travis-ci.org/terabytesoft/app-template-basic.svg?branch=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoft/app-template-basic/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoft/app-template-basic/badges/build.png?b=master" alt="Build Status">
    </a>    
     <a href="https://scrutinizer-ci.com/code-intelligence" target="_blank">
          <img src="https://scrutinizer-ci.com/g/terabytesoft/app-template-basic/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status">
    </a>	
    <a href="https://codeclimate.com/github/terabytesoft/app-template-basic/maintainability" target="_blank">
        <img src="https://api.codeclimate.com/v1/badges/7d94098b87e43be303b0/maintainability" alt="Maintainability">
    </a>
    <a href="https://github.styleci.io/repos/163084735">
        <img src="https://github.styleci.io/repos/163084735/shield?branch=master" alt="StyleCI">
    </a>    	
</p>

</br>

<p align="justify">
<strong>Yii 3.0 Web Project Skeleton Application Basic</strong>, is the structure for <strong>Yii 3.0 Web Application Basic</strong>, this allows you to update the <strong>Web Application Basic</strong> without having to re-install, all the details of your installation, configuration and start-up at <a href="https://github.com/terabytesoft/app-basic" title="Yii 3.0 Web Project Skeleton Application Basic" target="_blank">Yii 3.0 Web Project Skeleton Application Basic</a>
</p>

</br>

### **DIRECTORY STRUCTURE:**

```
config/             contains application configurations
messages/           contains application translations messages
public/             contains the entry script for a web server
    @runtime/       contains files generated during runtime
    aseets/         contains assets web application basic
node_modules/       contains dependency assets
tests/              contains tests codeception
vendor/             contains dependent 3rd-party packages
```

### **RUN TESTS CODECEPTION:**

~~~
$ php -S 127.0.0.1:8080 -t tests/public > /dev/null 2>&1&
$ vendor/bin/codecept run
~~~

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **LICENSE:**

[![License](https://poser.pugx.org/terabytesoft/app-template-basic/license)](LICENSE.md)
[![Yii](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)
[![Total Downloads](https://poser.pugx.org/terabytesoft/app-template-basic/downloads)](https://packagist.org/packages/terabytesoft/app-template-basic)
