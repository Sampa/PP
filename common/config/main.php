<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
	    'urlManager' => [
		    'class' => 'yii\web\UrlManager',
		    'enablePrettyUrl' => true,
		    'showScriptName' => false,
	    ],
    ],
	'bootstrap' => ['gii'],
	'modules' => [
		'gii' => 'yii\gii\Module',
	],

];
