<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
	'name' => 'Contactee',
    'basePath' => dirname(__DIR__),
	//'defaultRoute' => 'places/index',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
	'language' => 'ru-RU',
    'components' => [
		'formatter' => [
			'dateFormat' => 'dd.MM.yyyy',
			'datetimeFormat' => 'dd.MM.yyyy, HH.mm',
			'locale' => 'ru-RU', //русский перевод всего
			'timeZone' => 'Asia/Almaty',
			'decimalSeparator' => ',',
			'thousandSeparator' => ' ',
			//'currencyCode' => 'EUR',
	   ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'WDFgksdifhiw800934hekfDFGfhjdfi97', // ставится от фонаря
			'enableCookieValidation' => true,
			'enableCsrfValidation' => true,
			'parsers' => [
                'applicationlist/json' => 'yii\web\JsonParser',
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
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
			/*'transport' => [
				'class'      => 'Swift_SmtpTransport', 
				'host' => 'smtp.xyz.com',
				'username'   => 'username',
				'password' => 'password',
				'port' => '587',
				'encryption' => 'tls',
				'plugins'    => [
					[
						'class' => 'Openbuildings\Swiftmailer\CssInlinerPlugin',
					],
				],
			],*/
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
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true, // gii не работает когда true
			'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [ // точки доступа для REST API

			],
        ],
        
		'user' => [
			'class' => 'webvimark\modules\UserManagement\components\UserConfig',

			// Comment this if you don't want to record user logins
			'on afterLogin' => function($event) {
					\webvimark\modules\UserManagement\models\UserVisitLog::newVisitor($event->identity->id);
			},
			'enableAutoLogin' => false,
			'enableSession' => true,
			'authTimeout' => 600,
			//'identityClass' => 'app\models\User',
		],
    ],
    'params' => $params,
	'modules'=>[
	'user-management' => [
		'class' => 'webvimark\modules\UserManagement\UserManagementModule',

		 //'enableRegistration' => true,

		// Add regexp validation to passwords. Default pattern does not restrict user and can enter any set of characters.
		// The example below allows user to enter :
		// any set of characters
		// (?=\S{8,}): of at least length 8
		// (?=\S*[a-z]): containing at least one lowercase letter
		// (?=\S*[A-Z]): and at least one uppercase letter
		// (?=\S*[\d]): and at least one number
		// $: anchored to the end of the string

		//'passwordRegexp' => '^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$',
		

		// Here you can set your handler to change layout for any controller or action
		// Tip: you can use this event in any module
		'on beforeAction'=>function(yii\base\ActionEvent $event) {
				if ( $event->action->uniqueId == 'user-management/auth/login' )
				{
					$event->action->controller->layout = 'loginLayout.php';
				};
			},
	],
],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = [
//        'class' => 'yii\debug\Module',
//        // uncomment the following to add your IP if you are not connecting from localhost.
//        'allowedIPs' => ['127.0.0.1', '::1'],
//    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
