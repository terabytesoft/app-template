<?php

// params config Yii 3.0 Web Application Basic

return [
    // aplication:
	'app.id' => 'my-project-basic',
	'app.name' => 'My Project Basic',
    'adminEmail' => 'admin@example.com',
    'debug.allowedIPs' => ['127.0.0.1', '::1'],
    'favicon.ico' => '@yii/app/../public/favicon.ico',
    'user.passwordResetTokenExpire' => 3600,
    // database:
    'db.dsn' => 'mysql:host=localhost;dbname=your_database;charset=utf8',
	'db.username' => 'your_username',
    'db.password' => 'your_password',
    // mailer:
	'mailer.useFileTransport' => true,
    // translator:
	'i18n.locale' => 'en',
    'translator.basePath' => dirname(__DIR__) . '/messages',
    'translator.sourceLanguage' => 'en',
];
