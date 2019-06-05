<?php

return [
    'cache' => [
        '__class' => \Yiisoft\Cache\Cache::class,
        'handler' => [
            '__class'   => \Yiisoft\Cache\FileCache::class,
            'keyPrefix' => 'AppBasic'
        ],
    ],
    'logger' => function () {
        return new \Yiisoft\Log\Logger([
            new Yiisoft\Log\FileTarget(
                '/public/@runtime/logs/app.log'
            )
        ]);
    }
];
