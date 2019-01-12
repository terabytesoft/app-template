<?php

use yii\base\Aliases;
use yii\di\Reference;

return [
    Psr\Container\ContainerInterface::class => Reference::to('container'),
    'container' => function ($container) {
        return $container;
    },
    'app' => [
        'id' => 'test-app-basic',
        'aliases' => [
            '@webroot' => '@app/basic/tests',
            '@public'  => '@app/basic/tests',
            '@web'     => '@app/basic/tests',
        ],
    ],
    'assetManager' => [
        '__class'  => \yii\web\AssetManager::class,
    ],
    'factory' => [
        '__class' => yii\di\Factory::class,
    ],
    'i18n' => [
        '__class' => yii\i18n\I18N::class,
        '__construct()' => [
            'encoding' => $params['i18n.encoding'],
            'timezone' => $params['i18n.timezone'],
            'locale' => Reference::to('locale'),
            'translator' => Reference::to('translator'),
        ],
    ],
    'locale' => [
        '__class' => yii\i18n\Locale::class,
        '__construct()' => [
            'localeString' => $params['i18n.locale'],
        ],
    ],
    'translator' => [
        '__class' => yii\i18n\Translator::class,
        'translations' => [
            'basic' => [
                '__class' => yii\i18n\PhpMessageSource::class,
                'sourceLanguage' => $params['translator.sourceLanguage'],
                'basePath' => $params['translator.basePath'],
            ],
        ],
    ],
];
