<?php

$config = [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=lirpo',
            'username' => 'garmayev',
            'password' => 'rhbcnbyfgfrekjdf',
            'charset' => 'utf8',
        ],
        'request' => [
            'cookieValidationKey' => 'Sw5_9gKRA6OmZlThSKTdu3xi-Gv7r8K5',
        ],
    ],
];

if (!YII_ENV_TEST) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
    ];
}

return $config;
