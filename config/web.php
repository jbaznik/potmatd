<?php

namespace kartik\mpdf;

defined('YII_ENV') or define('YII_ENV', 'dev');

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    // dodal sem
    'modules' => [
         'gridview' =>  [
            'class' => '\kartik\grid\Module'
         ]
    ],
    'components' => [
      // setup Krajee Pdf component
      'pdf' => [
          'class' => Pdf::classname(),
          'format' => Pdf::FORMAT_A4,
          'orientation' => Pdf::ORIENT_PORTRAIT,
          'destination' => Pdf::DEST_BROWSER,
      // refer settings section for all configuration options
      ],
      'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'NMkxOwfFQqb21v7d2IWjt728Lpctx3L6',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
	// dodal sem
	/* 'authManager' => 
        [
		'class' => 'yii\rbac\DbManager',
 		'defaultRoles' => ['guest'],		
	], */
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', 'localhost','10.16.*'],
    ];
}

return $config;
