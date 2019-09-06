<?php
$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'language' => 'ru-RU',
	'id' => 'app-lirpo',
	'name' => 'AMGExpert',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	'controllerNamespace' => 'lirpo\controllers',
	'components' => [
		'i18n' => [
			'translations' => [
				'app*' => [
					'class' => 'yii\i18n\PhpMessageSource',
				],
			],
		],
        'assetManager' => [
            'converter' => [
                'class' => 'yii\web\AssetConverter',
                'commands' => [
                    'less' => ['css', 'lessc {from} {to} --no-color'],
                    'ts' => ['js', 'tsc --out {to} {from}'],
                ],
            ],
        ],
		'request' => [
			'csrfParam' => '_csrf-lirpo',
			'baseUrl' => '',
		],
		'session' => [
			'name' => 'advanced-lirpo',
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'' => 'site/index',
				'<action:\w+>' => 'site/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],
	],
	'params' => $params,
];