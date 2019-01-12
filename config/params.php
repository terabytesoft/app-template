<?php

// params config Yii 3.0 Web Application Basic

return [
    // aplication:
	'app.id' => 'my-project-basic',
	'app.name' => 'My Project Basic',
    'adminEmail' => 'admin@example.com',
    'debug.allowedIPs' => ['127.0.0.1', '::1'],
    'debug.enable' => false,
    'favicon.ico' => '@yii/app/../public/favicon.ico',
    // mailer:
	'mailer.useFileTransport' => true,
    // translator:
	'i18n.locale' => 'en',
];
