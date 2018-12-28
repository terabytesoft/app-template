<?php

/**
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/terabytesoft/app-template-basic
 *      @author: Wilmer Arámbula <terabytesoftw@gmail.com>
 *   @copyright: (c) TERABYTE SOFTWARE SA
 *       @views: config[params]
 *       @since: 0.0.1
 *         @yii: 3.0
 **/

/* Example Config Params - APP BASIC */

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
