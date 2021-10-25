<?php

use Cake\Cache\Engine\FileEngine;
use Cake\Database\Connection;
use Cake\Database\Driver\Mysql;
use Cake\Error\ExceptionRenderer;
use Cake\Log\Engine\FileLog;
use Cake\Mailer\Transport\MailTransport;

return [

    'debug' => filter_var(env('DEBUG', false), FILTER_VALIDATE_BOOLEAN),

    'App' => [
        'namespace' => 'App',
        'encoding' => env('APP_ENCODING', 'UTF-8'),
        'defaultLocale' => env('APP_DEFAULT_LOCALE', 'en_US'),
        'defaultTimezone' => env('APP_DEFAULT_TIMEZONE', 'UTC'),
        'base' => false,
        'dir' => 'src',
        'webroot' => 'webroot',
        'wwwRoot' => WWW_ROOT,
        //'baseUrl' => env('SCRIPT_NAME'),
        'fullBaseUrl' => false,
        'imageBaseUrl' => 'img/',
        'cssBaseUrl' => 'css/',
        'jsBaseUrl' => 'js/',
        'paths' => [
            'plugins' => [ROOT . DS . 'plugins' . DS],
            'templates' => [APP . 'Template' . DS],
            'locales' => [APP . 'Locale' . DS],
        ],
    ],


    'Security' => [
        'salt' => env('SECURITY_SALT', '5538602ac84d8c1782f1730a8063be034e8e427ce2af14d6e42cdf0665b588c4'),
    ],


    'Asset' => [
        //'timestamp' => true,
        // 'cacheTime' => '+1 year'
    ],


    'Cache' => [
        'default' => [
            'className' => FileEngine::class,
            'path' => CACHE,
            'url' => env('CACHE_DEFAULT_URL', null),
        ],


        '_cake_core_' => [
            'className' => FileEngine::class,
            'prefix' => 'myapp_cake_core_',
            'path' => CACHE . 'persistent/',
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKECORE_URL', null),
        ],


        '_cake_model_' => [
            'className' => FileEngine::class,
            'prefix' => 'myapp_cake_model_',
            'path' => CACHE . 'models/',
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKEMODEL_URL', null),
        ],


        '_cake_routes_' => [
            'className' => FileEngine::class,
            'prefix' => 'myapp_cake_routes_',
            'path' => CACHE,
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKEROUTES_URL', null),
        ],
    ],


    'Error' => [
        'errorLevel' => E_ALL,
        'exceptionRenderer' => ExceptionRenderer::class,
        'skipLog' => [],
        'log' => true,
        'trace' => true,
    ],



    'EmailTransport' => [
        'password' => [
            'className' => 'Smtp',
            'host' => 'ssl://smtp.gmail.com',
            //'port' => 465,
           // 'host' => 'ssl://smtp.gmail.com',
            'port' => 465,
            'username' => 'dorsi.programacion@gmail.com',
            'password' => '*pr0gr4m4c10n*',
           // 'username' => 'dorsi.programacion@gmail.com',
           // 'password' => '*pr0gr4m4c10n*',
            'client' => null,
        ],

        'aprobada' => [
            'className' => 'Smtp',
            'host' => 'ssl://smtp.gmail.com',
            //'host' => 'ssl://smtp.buenodiaz.com',
            'port' => 465,
            //'username' => 'sales@buenodiaz.com',
            //'password' => '311244220',
            'username' => 'dorsi.programacion@gmail.com',
            'password' => '*pr0gr4m4c10n*',
            'client' => null,
        ],

        'comprar' => [
            'className' => 'Smtp',
            'host' => 'ssl://smtp.gmail.com',
            //'host' => 'ssl://smtp.buenodiaz.com',
            'port' => 465,
            //'username' => 'sales@buenodiaz.com',
            //'password' => '311244220',
            'username' => 'dorsi.programacion@gmail.com',
            'password' => '*pr0gr4m4c10n*',
            'client' => null,
        ],
        
        'correoadmin' => [
            'className' => 'Smtp',
            'host' => 'ssl://smtp.gmail.com',
            //'host' => 'ssl://smtp.buenodiaz.com',
            'port' => 465,
            //'username' => 'sales@buenodiaz.com',
            //'password' => '311244220',
            'username' => 'dorsi.programacion@gmail.com',
            'password' => '*pr0gr4m4c10n*',
            'client' => null,
        ],
        
        'paraeliecer' => [
            'className' => 'Smtp',
            'host' => 'ssl://smtp.gmail.com',
            'port' => 465,
            'username' => 'dorsi.programacion@gmail.com',
            'password' => '*pr0gr4m4c10n*',
            'client' => null
        ],

    ],


    'Email' => [
        'password' => [
            'transport' => 'password',
            'from' => 'you@localhost'
        ],
        'aprobada' => [
            'transport' => 'aprobada',
            'from' => 'you@localhost'
        ],
        'comprar' => [
            'transport' => 'aprobada',
            'from' => 'you@localhost'
        ],
        'paraeliecer' => [
            'transport' => 'paraeliecer',
            'from' => 'you@localhost'
        ],
    ],







    'Datasources' => [
        'default' => [
            'className' => Connection::class,
            'driver' => Postgres::class,
            'persistent' => false,
            'host' => 'localhost',

            'port' => '9876',
            'username' => 'programacion',
            'password' => 'programacion',
            'database' => 'tienda',

            //'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,


            'quoteIdentifiers' => false,


            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],

            'url' => env('DATABASE_URL', null),
        ],

        /**
         * The test connection is used during the test suite.
         */
        'test' => [
            'className' => Connection::class,
            'driver' => Mysql::class,
            'persistent' => false,
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'test_myapp',
            //'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            'quoteIdentifiers' => false,
            'log' => false,
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
            'url' => env('DATABASE_TEST_URL', null),
        ],
    ],


    'Log' => [
        'debug' => [
            'className' => FileLog::class,
            'path' => LOGS,
            'file' => 'debug',
            'url' => env('LOG_DEBUG_URL', null),
            'scopes' => false,
            'levels' => ['notice', 'info', 'debug'],
        ],
        'error' => [
            'className' => FileLog::class,
            'path' => LOGS,
            'file' => 'error',
            'url' => env('LOG_ERROR_URL', null),
            'scopes' => false,
            'levels' => ['warning', 'error', 'critical', 'alert', 'emergency'],
        ],
        // To enable this dedicated query log, you need set your datasource's log flag to true
        'queries' => [
            'className' => FileLog::class,
            'path' => LOGS,
            'file' => 'queries',
            'url' => env('LOG_QUERIES_URL', null),
            'scopes' => ['queriesLog'],
        ],
    ],

    'Session' => [
        'defaults' => 'php',
        'timeout' => 30 // 30 minutos
    ],
];
