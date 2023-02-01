<?php return array (
  'app' => 
  array (
    'name' => 'wared B2B',
    'app_path' => '',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://127.0.0.1:8000/',
    'asset_url' => NULL,
    'timezone' => 'Asia/Dhaka',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:5+eCqv9bq+u8LTaXfmTAP5ZDAn5Jx4m2u5rAIEUabpc=',
    'cipher' => 'AES-256-CBC',
    'app_installed' => 'yes',
    'demo_mode' => 'no',
    'mobile_mode' => 'off',
    'mix_url' => 'http://127.0.0.1:8000/public',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'App\\Services\\RepositoryServiceProvider',
      27 => 'Cartalyst\\Sentinel\\Laravel\\SentinelServiceProvider',
      28 => 'Mcamara\\LaravelLocalization\\LaravelLocalizationServiceProvider',
      29 => 'App\\Providers\\ViewServiceProvider',
      30 => 'Brian2694\\Toastr\\ToastrServiceProvider',
      31 => 'Laravel\\Socialite\\SocialiteServiceProvider',
      32 => 'App\\Providers\\MobileProvider',
      33 => 'Anand\\LaravelPaytmWallet\\PaytmWalletServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Activation' => 'Cartalyst\\Sentinel\\Laravel\\Facades\\Activation',
      'Reminder' => 'Cartalyst\\Sentinel\\Laravel\\Facades\\Reminder',
      'Sentinel' => 'Cartalyst\\Sentinel\\Laravel\\Facades\\Sentinel',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'LaravelLocalization' => 'Mcamara\\LaravelLocalization\\Facades\\LaravelLocalization',
      'Toastr' => 'Brian2694\\Toastr\\Facades\\Toastr',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
      'PaytmWallet' => 'Anand\\LaravelPaytmWallet\\Facades\\PaytmWallet',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => '',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => '',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'E:\\raqmi plus\\yoori\\ass\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => '',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'wared_b2b_cache',
  ),
  'cartalyst' => 
  array (
    'sentinel' => 
    array (
      'session' => 'cartalyst_sentinel',
      'cookie' => 'cartalyst_sentinel',
      'users' => 
      array (
        'model' => 'App\\Models\\User',
      ),
      'roles' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Roles\\EloquentRole',
      ),
      'permissions' => 
      array (
        'class' => 'Cartalyst\\Sentinel\\Permissions\\StandardPermissions',
      ),
      'persistences' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Persistences\\EloquentPersistence',
        'single' => false,
      ),
      'checkpoints' => 
      array (
        0 => 'throttle',
        1 => 'activation',
      ),
      'activations' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Activations\\EloquentActivation',
        'expires' => 259200,
        'lottery' => 
        array (
          0 => 2,
          1 => 100,
        ),
      ),
      'reminders' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Reminders\\EloquentReminder',
        'expires' => 14400,
        'lottery' => 
        array (
          0 => 2,
          1 => 100,
        ),
      ),
      'throttling' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Throttling\\EloquentThrottle',
        'global' => 
        array (
          'interval' => 900,
          'thresholds' => 
          array (
            10 => 1,
            20 => 2,
            30 => 4,
            40 => 8,
            50 => 16,
            60 => 32,
          ),
        ),
        'ip' => 
        array (
          'interval' => 900,
          'thresholds' => 5,
        ),
        'user' => 
        array (
          'interval' => 900,
          'thresholds' => 5,
        ),
      ),
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
      2 => 'register',
      3 => 'login',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => true,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'wared',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'localhost:3306',
        'port' => '3306',
        'database' => 'wared',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB',
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'localhost:3306',
        'port' => '3306',
        'database' => 'wared',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'localhost:3306',
        'port' => '3306',
        'database' => 'wared',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'wared_b2b_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'E:\\raqmi plus\\yoori\\ass\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'E:\\raqmi plus\\yoori\\ass\\public\\app/public',
        'url' => 'http://127.0.0.1:8000//storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => '',
        'bucket' => '',
        'url' => '',
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'visibility' => 'public',
      ),
      'wasabi' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => '',
        'bucket' => '',
        'url' => '',
        'endpoint' => 'https://s3.wasabisys.com',
        'visibility' => 'public',
      ),
    ),
    'links' => 
    array (
      'E:\\raqmi plus\\yoori\\ass\\public\\storage' => 'E:\\raqmi plus\\yoori\\ass\\storage\\app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'jazz_cash' => 
  array (
    'MERCHANT_ID' => 'MC34318',
    'PASSWORD' => '8h484tw2t8',
    'INTEGERITY_SALT' => 'w218xv9215',
    'CURRENCY_CODE' => 'PKR',
    'VERSION' => '1.1',
    'LANGUAGE' => 'EN',
    'RETURN_URL' => '/user/complete-order/{id}',
    'TRANSACTION_POST_URL' => 'https://sandbox.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform/',
    'JAZZCASH_HTTP_POST_URL' => 'https://sandbox.jazzcash.com.pk/ApplicationAPI/API/2.0/Purchase/DoMWalletTransaction',
  ),
  'jwt' => 
  array (
    'secret' => 'dR9ywm61DP4HMMP9nY5letBmem64mLQk74aVn05ud10usuQPouYWcBORqyn9cAkH',
    'keys' => 
    array (
      'public' => NULL,
      'private' => NULL,
      'passphrase' => NULL,
    ),
    'ttl' => NULL,
    'refresh_ttl' => 20160,
    'algo' => 'HS256',
    'required_claims' => 
    array (
      0 => 'iss',
      1 => 'iat',
      2 => 'nbf',
      3 => 'sub',
      4 => 'jti',
    ),
    'persistent_claims' => 
    array (
    ),
    'lock_subject' => true,
    'leeway' => 0,
    'blacklist_enabled' => true,
    'blacklist_grace_period' => 0,
    'decrypt_cookies' => false,
    'providers' => 
    array (
      'jwt' => 'Tymon\\JWTAuth\\Providers\\JWT\\Lcobucci',
      'auth' => 'Tymon\\JWTAuth\\Providers\\Auth\\Illuminate',
      'storage' => 'Tymon\\JWTAuth\\Providers\\Storage\\Illuminate',
    ),
  ),
  'laravellocalization' => 
  array (
    'supportedLocales' => 
    array (
      'en' => 
      App\Models\LanguageConfig::__set_state(array(
         'fillable' => 
        array (
          0 => 'language_id',
          1 => 'name',
          2 => 'script',
          3 => 'native',
          4 => 'regional',
        ),
         'connection' => 'mysql',
         'table' => 'language_configs',
         'primaryKey' => 'id',
         'keyType' => 'int',
         'incrementing' => true,
         'with' => 
        array (
        ),
         'withCount' => 
        array (
        ),
         'preventsLazyLoading' => false,
         'perPage' => 15,
         'exists' => true,
         'wasRecentlyCreated' => false,
         'escapeWhenCastingToString' => false,
         'attributes' => 
        array (
          'name' => 'arabic',
          'script' => NULL,
          'native' => NULL,
          'regional' => NULL,
          'flag_icon' => 'images/flags/us.png',
        ),
         'original' => 
        array (
          'name' => 'arabic',
          'script' => NULL,
          'native' => NULL,
          'regional' => NULL,
        ),
         'changes' => 
        array (
        ),
         'casts' => 
        array (
        ),
         'classCastCache' => 
        array (
        ),
         'attributeCastCache' => 
        array (
        ),
         'dates' => 
        array (
        ),
         'dateFormat' => NULL,
         'appends' => 
        array (
        ),
         'dispatchesEvents' => 
        array (
        ),
         'observables' => 
        array (
        ),
         'relations' => 
        array (
        ),
         'touches' => 
        array (
        ),
         'timestamps' => true,
         'hidden' => 
        array (
        ),
         'visible' => 
        array (
        ),
         'guarded' => 
        array (
          0 => '*',
        ),
      )),
      'ae' => 
      App\Models\LanguageConfig::__set_state(array(
         'fillable' => 
        array (
          0 => 'language_id',
          1 => 'name',
          2 => 'script',
          3 => 'native',
          4 => 'regional',
        ),
         'connection' => 'mysql',
         'table' => 'language_configs',
         'primaryKey' => 'id',
         'keyType' => 'int',
         'incrementing' => true,
         'with' => 
        array (
        ),
         'withCount' => 
        array (
        ),
         'preventsLazyLoading' => false,
         'perPage' => 15,
         'exists' => true,
         'wasRecentlyCreated' => false,
         'escapeWhenCastingToString' => false,
         'attributes' => 
        array (
          'name' => 'arabic',
          'script' => NULL,
          'native' => NULL,
          'regional' => NULL,
          'flag_icon' => 'images/flags/ae.png',
        ),
         'original' => 
        array (
          'name' => 'arabic',
          'script' => NULL,
          'native' => NULL,
          'regional' => NULL,
        ),
         'changes' => 
        array (
        ),
         'casts' => 
        array (
        ),
         'classCastCache' => 
        array (
        ),
         'attributeCastCache' => 
        array (
        ),
         'dates' => 
        array (
        ),
         'dateFormat' => NULL,
         'appends' => 
        array (
        ),
         'dispatchesEvents' => 
        array (
        ),
         'observables' => 
        array (
        ),
         'relations' => 
        array (
        ),
         'touches' => 
        array (
        ),
         'timestamps' => true,
         'hidden' => 
        array (
        ),
         'visible' => 
        array (
        ),
         'guarded' => 
        array (
          0 => '*',
        ),
      )),
    ),
    'useAcceptLanguageHeader' => true,
    'hideDefaultLocaleInURL' => true,
    'localesOrder' => 
    array (
    ),
    'localesMapping' => 
    array (
    ),
    'utf8suffix' => '.UTF-8',
    'urlsIgnored' => 
    array (
      0 => '/skipped',
    ),
    'httpMethodsIgnored' => 
    array (
      0 => 'POST',
      1 => 'PUT',
      2 => 'PATCH',
      3 => 'DELETE',
    ),
  ),
  'laravelpwa' => 
  array (
    'name' => 'Yoori',
    'manifest' => 
    array (
      'name' => 'wared B2B',
      'short_name' => 'Yoori',
      'scope' => '/',
      'start_url' => '/',
      'background_color' => '#ffffff',
      'theme_color' => '#000000',
      'display' => 'standalone',
      'orientation' => 'portrait',
      'status_bar' => 'black',
      'icons' => 
      array (
        '72x72' => 
        array (
          'path' => 'http://127.0.0.1:8000//public/images/ico/favicon-72x72.png',
          'purpose' => 'any',
        ),
        '96x96' => 
        array (
          'path' => 'http://127.0.0.1:8000//public/images/ico/favicon-96x96.png',
          'purpose' => 'any',
        ),
        '128x128' => 
        array (
          'path' => 'http://127.0.0.1:8000//public/images/ico/favicon-128x128.png',
          'purpose' => 'any',
        ),
        '144x144' => 
        array (
          'path' => 'http://127.0.0.1:8000//public/images/ico/favicon-144x144.png',
          'purpose' => 'any',
        ),
        '152x152' => 
        array (
          'path' => 'http://127.0.0.1:8000//public/images/ico/favicon-152x152.png',
          'purpose' => 'any',
        ),
        '192x192' => 
        array (
          'path' => 'http://127.0.0.1:8000//public/images/ico/favicon-192x192.png',
          'purpose' => 'any',
        ),
        '384x384' => 
        array (
          'path' => 'http://127.0.0.1:8000//public/images/ico/favicon-384x384.png',
          'purpose' => 'any',
        ),
        '512x512' => 
        array (
          'path' => 'http://127.0.0.1:8000//public/images/ico/favicon-512x512.png',
          'purpose' => 'any',
        ),
      ),
      'splash' => 
      array (
        '640x1136' => 'http://127.0.0.1:8000//public/images/ico/splash-640x1136.png',
        '750x1334' => 'http://127.0.0.1:8000//public/images/ico/splash-750x1334.png',
        '828x1792' => 'http://127.0.0.1:8000//public/images/ico/splash-828x1792.png',
        '1125x2436' => 'http://127.0.0.1:8000//public/images/ico/splash-1125x2436.png',
        '1242x2208' => 'http://127.0.0.1:8000//public/images/ico/splash-1242x2208.png',
        '1242x2688' => 'http://127.0.0.1:8000//public/images/ico/splash-1242x2688.png',
        '1536x2048' => 'http://127.0.0.1:8000//public/images/ico/splash-1536x2048.png',
        '1668x2224' => 'http://127.0.0.1:8000//public/images/ico/splash-1668x2224.png',
        '1668x2388' => 'http://127.0.0.1:8000//public/images/ico/splash-1668x2388.png',
        '2048x2732' => 'http://127.0.0.1:8000//public/images/ico/splash-2048x2732.png',
      ),
      'custom' => 
      array (
      ),
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'E:\\raqmi plus\\yoori\\ass\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'E:\\raqmi plus\\yoori\\ass\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'E:\\raqmi plus\\yoori\\ass\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.sendgrid.net',
        'port' => '587',
        'encryption' => '',
        'username' => '',
        'password' => '',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
        'domain' => NULL,
        'secret' => NULL,
        'endpoint' => 'api.eu.mailgun.net',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => '',
      'name' => '',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'E:\\raqmi plus\\yoori\\ass\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'pdf' => 
  array (
    'mode' => 'utf-8',
    'format' => 'A4',
    'author' => '',
    'subject' => '',
    'keywords' => '',
    'creator' => 'Laravel Pdf',
    'display_mode' => 'fullpage',
    'tempDir' => 'E:\\raqmi plus\\yoori\\ass\\../temp/',
    'pdf_a' => false,
    'pdf_a_auto' => false,
    'icc_profile_path' => '',
    'font_path' => 'E:\\raqmi plus\\yoori\\ass\\resources/fonts',
    'font_data' => 
    array (
      'en' => 
      array (
        'R' => 'Poppins-Regular.ttf',
        'I' => 'Poppins-Medium.ttf',
        'B' => 'Poppins-Bold.ttf',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => '',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => '127.0.0.1',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'seotools' => 
  array (
    'meta' => 
    array (
      'defaults' => 
      array (
        'title' => 'It\'s Over 9000!',
        'titleBefore' => false,
        'description' => 'For those who helped create the Genki Dama',
        'separator' => ' - ',
        'keywords' => 
        array (
        ),
        'canonical' => false,
        'robots' => false,
      ),
      'webmaster_tags' => 
      array (
        'google' => NULL,
        'bing' => NULL,
        'alexa' => NULL,
        'pinterest' => NULL,
        'yandex' => NULL,
        'norton' => NULL,
      ),
      'add_notranslate_class' => false,
    ),
    'opengraph' => 
    array (
      'defaults' => 
      array (
        'title' => 'Over 9000 Thousand!',
        'description' => 'For those who helped create the Genki Dama',
        'url' => false,
        'type' => false,
        'site_name' => false,
        'images' => 
        array (
        ),
      ),
    ),
    'twitter' => 
    array (
      'defaults' => 
      array (
      ),
    ),
    'json-ld' => 
    array (
      'defaults' => 
      array (
        'title' => 'Over 9000 Thousand!',
        'description' => 'For those who helped create the Genki Dama',
        'url' => false,
        'type' => 'WebPage',
        'images' => 
        array (
        ),
      ),
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => '',
    ),
    'recaptcha' => 
    array (
      'site_key' => '6LcVeqMeAAAAAIpvG2nbIm0SIqy7twMv4luWg1l6',
      'secret' => '6LcVeqMeAAAAAFp2l6TmaqMg8ZU87VglYsKOIek2',
    ),
    'facebook' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'google' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'twitter' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'razorpay' => 
    array (
      'RAZORPAY_KEY' => '',
      'RAZORPAY_SECRET' => '',
    ),
    'paytm-wallet' => 
    array (
      'env' => 'local',
      'merchant_id' => NULL,
      'merchant_key' => NULL,
      'merchant_website' => NULL,
      'channel' => NULL,
      'industry_type' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'E:\\raqmi plus\\yoori\\ass\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'wared_b2b_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'sslcommerz' => 
  array (
    'projectPath' => NULL,
    'apiDomain' => 'https://sandbox.sslcommerz.com',
    'apiCredentials' => 
    array (
      'store_id' => '',
      'store_password' => '',
    ),
    'apiUrl' => 
    array (
      'make_payment' => '/gwprocess/v4/api.php',
      'transaction_status' => '/validator/api/merchantTransIDvalidationAPI.php',
      'order_validate' => '/validator/api/validationserverAPI.php',
      'refund_payment' => '/validator/api/merchantTransIDvalidationAPI.php',
      'refund_status' => '/validator/api/merchantTransIDvalidationAPI.php',
    ),
    'connect_from_localhost' => true,
    'success_url' => '/',
    'failed_url' => NULL,
    'cancel_url' => NULL,
    'ipn_url' => '/ipn',
  ),
  'tracker' => 
  array (
    'middleware' => 
    array (
      'attach' => 
      array (
        0 => 'web',
      ),
    ),
    'events' => 
    array (
      'dispatch' => true,
      'channel' => 'redbox-tracker-new-visitors',
    ),
    'track_authenticated_visitors' => false,
    'track_unauthenticated_visitors' => true,
    'allowed_methods' => 
    array (
      'HEAD' => false,
      'POST' => true,
      'PUT' => true,
      'GET' => true,
    ),
    'skip_routes' => 
    array (
      0 => 'login',
      1 => 'logout',
      2 => 'register',
      3 => 'password.confirm',
      4 => 'password.email',
      5 => 'password.request',
      6 => 'password.update',
      7 => 'password.reset',
    ),
  ),
  'translation' => 
  array (
    'driver' => 'file',
    'route_group_config' => 
    array (
      'middleware' => 'web',
    ),
    'translation_methods' => 
    array (
      0 => 'trans',
      1 => '__',
    ),
    'scan_paths' => 
    array (
      0 => 'E:\\raqmi plus\\yoori\\ass\\app',
      1 => 'E:\\raqmi plus\\yoori\\ass\\resources',
    ),
    'ui_url' => '/admin/languages',
    'database' => 
    array (
      'connection' => '',
      'languages_table' => '',
      'translations_table' => '',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'E:\\raqmi plus\\yoori\\ass\\resources\\views',
    ),
    'compiled' => 'E:\\raqmi plus\\yoori\\ass\\storage\\framework\\views',
  ),
  'yrsetting' => 
  array (
    'paginate' => 5,
    'api_paginate' => 15,
    'index_form_paginate' => 10,
    'media_paginate' => 32,
    'settings' => 
    array (
    ),
    'setting_by_lang' => 
    array (
      0 => 'system_name',
      1 => 'meta_title',
      2 => 'meta_description',
      3 => 'keyword',
      4 => 'article',
      5 => 'cookies_agreement',
      6 => 'popup_title',
      7 => 'popup_description',
      8 => 'about_description',
      9 => 'copyright',
      10 => 'home_page_article',
      11 => 'admin_panel_title',
      12 => 'admin_panel_copyright_text',
      13 => 'system_short_name',
      14 => 'is_pos_activated_for_seller',
      15 => 'pos_invoice_title',
      16 => 'pos_invoice_address',
      17 => 'pos_invoice_terms_condition',
      18 => 'pos_invoice_phone',
      19 => 'pos_invoice_powered_by',
      20 => 'refund_protection_title',
      21 => 'refund_protection_sub_title',
      22 => 'header_menu',
      23 => 'footer_menu',
    ),
    'setting_image' => 
    array (
      0 => 'favicon',
      1 => 'og_image',
      2 => 'popup_image',
      3 => 'light_logo',
      4 => 'dark_logo',
      5 => 'invoice_logo',
      6 => 'banner_image',
      7 => 'footer_logo',
      8 => 'payment_method_banner',
      9 => 'refund_sticker',
      10 => 'admin_light_logo',
      11 => 'admin_dark_logo',
      12 => 'service_image',
    ),
    'setting_array' => 
    array (
      0 => 'header_menu',
      1 => 'footer_menu',
      2 => 'useful_links',
      3 => 'home_page_contents',
      4 => 'mobile_home_page_contents',
      5 => 'login_banner',
      6 => 'sing_up_banner',
      7 => 'forgot_password_banner',
      8 => 'top_bar_banner',
      9 => 'user_dashboard_banner',
      10 => 'seller_sing_up_banner',
      11 => 'product_details_site_banner',
      12 => 'category_default_banner',
      13 => 'featured_category_banner',
      14 => 'invoice_based_shipping_fee',
      15 => 'seller_system',
    ),
    'is_twilio_sms_activated' => 
    array (
      0 => 'twilio_sms_sid',
      1 => 'twilio_sms_auth_token',
      2 => 'valid_twilio_sms_number',
    ),
    'is_fast_2_activated' => 
    array (
      0 => 'fast_2_auth_key',
      1 => 'fast_2_entity_id',
      2 => 'fast_2_route',
      3 => 'fast_2_language',
      4 => 'fast_2_sender_id',
    ),
    'is_spagreen_sms_activated' => 
    array (
      0 => 'spagreen_sms_api_key',
      1 => 'spagreen_secret_key',
    ),
    'is_mimo_sms_activated' => 
    array (
      0 => 'mimo_username',
      1 => 'mimo_sms_password',
      2 => 'mimo_sms_sender_id',
    ),
    'is_nexmo_sms_activated' => 
    array (
      0 => 'nexmo_sms_key',
      1 => 'nexmo_sms_secret_key',
    ),
    'is_ssl_wireless_sms_activated' => 
    array (
      0 => 'ssl_sms_api_token',
      1 => 'ssl_sms_sid',
      2 => 'ssm_sms_url',
    ),
    'is_paypal_activated' => 
    array (
      0 => 'paypal_client_id',
    ),
    'is_stripe_activated' => 
    array (
      0 => 'stripe_key',
      1 => 'stripe_secret',
    ),
    'is_sslcommerz_activated' => 
    array (
      0 => 'sslcommerz_id',
      1 => 'sslcommerz_password',
    ),
    'is_sslcommerz_sandbox_mode_activated' => 
    array (
      0 => 'sslcommerz_id',
      1 => 'sslcommerz_password',
    ),
    'is_paytm_activated' => 
    array (
      0 => 'merchant_id',
      1 => 'merchant_key',
      2 => 'merchant_website',
      3 => 'channel',
      4 => 'industry_type',
    ),
    'is_jazz_cash_activated' => 
    array (
      0 => 'jazz_cash_merchant_id',
      1 => 'jazz_cash_password',
      2 => 'jazz_cash_integrity_salt',
    ),
    'is_razorpay_activated' => 
    array (
      0 => 'razorpay_key',
      1 => 'razorpay_secret',
    ),
    'is_mollie_activated' => 
    array (
      0 => 'mollie_api_key',
      1 => 'mollie_partner_id',
      2 => 'mollie_profile_id',
    ),
    'is_paystack_activated' => 
    array (
      0 => 'paystack_secret_key',
      1 => 'paystack_public_key',
    ),
    'is_flutterwave_activated' => 
    array (
      0 => 'flutterwave_secret_key',
      1 => 'flutterwave_public_key',
    ),
    'is_mercado_pago_activated' => 
    array (
      0 => 'mercadopago_access_key',
      1 => 'mercadopago_key',
    ),
    'is_mid_trans_activated' => 
    array (
      0 => 'mid_trans_client_id',
      1 => 'mid_trans_server_key',
    ),
    'is_telr_activated' => 
    array (
      0 => 'telr_store_id',
      1 => 'telr_auth_key',
    ),
    'is_google_pay_activated' => 
    array (
      0 => 'google_pay_merchant_name',
      1 => 'google_pay_merchant_id',
      2 => 'google_pay_gateway',
      3 => 'google_pay_gateway_merchant_id',
    ),
    'is_amarpay_activated' => 
    array (
      0 => 'amrapay_store_id',
      1 => 'amarpay_signature_key',
    ),
    'is_amarpay_sandbox_mode_activated' => 
    array (
      0 => 'amrapay_store_id',
      1 => 'amarpay_signature_key',
    ),
    'is_bkash_activated' => 
    array (
      0 => 'bkash_app_key',
      1 => 'bkash_app_secret',
      2 => 'bkash_username',
      3 => 'bkash_password',
    ),
    'is_bkash_sandbox_mode_activated' => 
    array (
      0 => 'bkash_app_key',
      1 => 'bkash_app_secret',
      2 => 'bkash_username',
      3 => 'bkash_password',
    ),
    'is_nagad_activated' => 
    array (
      0 => 'nagad_mode',
      1 => 'nagad_merchant_id',
      2 => 'nagad_merchant_no',
      3 => 'nagad_public_key',
      4 => 'nagad_private_key',
    ),
    'is_nagad_sandbox_mode_activated' => 
    array (
      0 => 'nagad_mode',
      1 => 'nagad_merchant_id',
      2 => 'nagad_merchant_no',
      3 => 'nagad_public_key',
      4 => 'nagad_private_key',
    ),
    'is_iyzico_activated' => 
    array (
      0 => 'iyzico_api_key',
      1 => 'iyzico_secret_key',
    ),
    'is_iyzico_sandbox_enabled' => 
    array (
      0 => 'iyzico_api_key',
      1 => 'iyzico_secret_key',
    ),
    'is_kkiapay_activated' => 
    array (
      0 => 'kkiapay_public_api_key',
      1 => 'kkiapay_private_api_key',
      2 => 'kkiapay_secret',
    ),
    'is_kkiapay_sandbox_enabled' => 
    array (
      0 => 'kkiapay_public_api_key',
      1 => 'kkiapay_private_api_key',
      2 => 'kkiapay_secret',
    ),
    'is_skrill_activated' => 
    array (
      0 => 'skrill_merchant_email',
    ),
    'is_facebook_pixel_activated' => 
    array (
      0 => 'facebook_pixel_id',
    ),
    'is_google_analytics_activated' => 
    array (
      0 => 'tracking_code',
    ),
    'is_bank_active' => 
    array (
      0 => 'bank_name',
      1 => 'owner_name',
      2 => 'bank_phone_no',
      3 => 'branch',
      4 => 'account_number',
      5 => 'routing_no',
    ),
    'is_paypal_active' => 
    array (
      0 => 'paypal_email',
    ),
    'is_google_login_activated' => 
    array (
    ),
    'is_facebook_login_activated' => 
    array (
    ),
    'is_twitter_login_activated' => 
    array (
    ),
    'is_recaptcha_activated' => 
    array (
      0 => 'recaptcha_Site_key',
      1 => 'recaptcha_secret',
    ),
    'is_pusher_notification_active' => 
    array (
      0 => 'pusher_app_id',
      1 => 'pusher_app_key',
      2 => 'pusher_app_secret',
      3 => 'pusher_app_cluster',
    ),
    'supported_mimes' => 
    array (
      'jpg' => 'image',
      'jpeg' => 'image',
      'png' => 'image',
      'webp' => 'image',
      'gif' => 'image',
      'mp4' => 'video',
      'mpg' => 'video',
      'mpeg' => 'video',
      'webm' => 'video',
      'ogg' => 'video',
      'avi' => 'video',
      'mov' => 'video',
      'flv' => 'video',
      'swf' => 'video',
      'mkv' => 'video',
      'wmv' => 'video',
      'wma' => 'audio',
      'aac' => 'audio',
      'wav' => 'audio',
      'mp3' => 'audio',
      'zip' => 'archive',
      'rar' => 'archive',
      '7z' => 'archive',
      'doc' => 'document',
      'txt' => 'document',
      'docx' => 'document',
      'pdf' => 'pdf',
      'csv' => 'document',
      'xml' => 'document',
      'ods' => 'document',
      'xlr' => 'document',
      'xls' => 'document',
      'xlsx' => 'document',
    ),
    'locale' => 
    array (
      0 => 'ace',
      1 => 'af',
      2 => 'agq',
      3 => 'ak',
      4 => 'an',
      5 => 'cch',
      6 => 'gn',
      7 => 'ae',
      8 => 'ay',
      9 => 'az',
      10 => 'id',
      11 => 'ms',
      12 => 'bm',
      13 => 'jv',
      14 => 'su',
      15 => 'bh',
      16 => 'bi',
      17 => 'nb',
      18 => 'bs',
      19 => 'bd',
      20 => 'br',
      21 => 'ca',
      22 => 'ch',
      23 => 'ny',
      24 => 'kde',
      25 => 'sn',
      26 => 'co',
      27 => 'cy',
      28 => 'da',
      29 => 'se',
      30 => 'de',
      31 => 'luo',
      32 => 'nv',
      33 => 'dua',
      34 => 'et',
      35 => 'na',
      36 => 'guz',
      37 => 'en',
      38 => 'en-AU',
      39 => 'en-GB',
      40 => 'en-CA',
      41 => 'en-US',
      42 => 'es',
      43 => 'eo',
      44 => 'eu',
      45 => 'ewo',
      46 => 'ee',
      47 => 'fil',
      48 => 'fr',
      49 => 'fr-CA',
      50 => 'fy',
      51 => 'fur',
      52 => 'fo',
      53 => 'gaa',
      54 => 'ga',
      55 => 'gv',
      56 => 'sm',
      57 => 'gl',
      58 => 'ki',
      59 => 'gd',
      60 => 'ha',
      61 => 'bez',
      62 => 'ho',
      63 => 'hr',
      64 => 'bem',
      65 => 'io',
      66 => 'ig',
      67 => 'rn',
      68 => 'ia',
      69 => 'in',
      70 => 'iu-Latn',
      71 => 'sbp',
      72 => 'nd',
      73 => 'nr',
      74 => 'xh',
      75 => 'zu',
      76 => 'it',
      77 => 'ik',
      78 => 'dyo',
      79 => 'kea',
      80 => 'kaj',
      81 => 'mh',
      82 => 'kl',
      83 => 'kln',
      84 => 'kr',
      85 => 'kcg',
      86 => 'kw',
      87 => 'naq',
      88 => 'rof',
      89 => 'kam',
      90 => 'kg',
      91 => 'jmc',
      92 => 'rw',
      93 => 'asa',
      94 => 'rwk',
      95 => 'saq',
      96 => 'ksb',
      97 => 'swc',
      98 => 'sw',
      99 => 'dav',
      100 => 'teo',
      101 => 'khq',
      102 => 'ses',
      103 => 'mfe',
      104 => 'ht',
      105 => 'kj',
      106 => 'ksh',
      107 => 'ebu',
      108 => 'mer',
      109 => 'lag',
      110 => 'lah',
      111 => 'la',
      112 => 'lv',
      113 => 'to',
      114 => 'lt',
      115 => 'li',
      116 => 'ln',
      117 => 'lg',
      118 => 'luy',
      119 => 'lb',
      120 => 'hu',
      121 => 'mgh',
      122 => 'mg',
      123 => 'mt',
      124 => 'mtr',
      125 => 'mua',
      126 => 'mi',
      127 => 'nl',
      128 => 'nmg',
      129 => 'yav',
      130 => 'nn',
      131 => 'oc',
      132 => 'ang',
      133 => 'xog',
      134 => 'om',
      135 => 'ng',
      136 => 'hz',
      137 => 'uz-Latn',
      138 => 'nds',
      139 => 'pl',
      140 => 'pt',
      141 => 'pt-BR',
      142 => 'ff',
      143 => 'pi',
      144 => 'aa',
      145 => 'ty',
      146 => 'ksf',
      147 => 'ro',
      148 => 'cgg',
      149 => 'rm',
      150 => 'qu',
      151 => 'nyn',
      152 => 'ssy',
      153 => 'sc',
      154 => 'de-CH',
      155 => 'gsw',
      156 => 'trv',
      157 => 'seh',
      158 => 'nso',
      159 => 'st',
      160 => 'tn',
      161 => 'sq',
      162 => 'sid',
      163 => 'ss',
      164 => 'sk',
      165 => 'sl',
      166 => 'so',
      167 => 'sr-Latn',
      168 => 'sh',
      169 => 'fi',
      170 => 'sv',
      171 => 'sg',
      172 => 'tl',
      173 => 'tzm-Latn',
      174 => 'kab',
      175 => 'twq',
      176 => 'shi',
      177 => 'nus',
      178 => 'vi',
      179 => 'tg-Latn',
      180 => 'lu',
      181 => 've',
      182 => 'tw',
      183 => 'tr',
      184 => 'ale',
      185 => 'ca-valencia',
      186 => 'vai-Latn',
      187 => 'vo',
      188 => 'fj',
      189 => 'wa',
      190 => 'wae',
      191 => 'wen',
      192 => 'wo',
      193 => 'ts',
      194 => 'dje',
      195 => 'yo',
      196 => 'de-AT',
      197 => 'is',
      198 => 'cs',
      199 => 'bas',
      200 => 'mas',
      201 => 'haw',
      202 => 'el',
      203 => 'uz',
      204 => 'az-Cyrl',
      205 => 'ab',
      206 => 'os',
      207 => 'ky',
      208 => 'sr',
      209 => 'av',
      210 => 'ady',
      211 => 'ba',
      212 => 'be',
      213 => 'bg',
      214 => 'kv',
      215 => 'mk',
      216 => 'mn',
      217 => 'ce',
      218 => 'ru',
      219 => 'sah',
      220 => 'tt',
      221 => 'tg',
      222 => 'tk',
      223 => 'uk',
      224 => 'cv',
      225 => 'cu',
      226 => 'kk',
      227 => 'hy',
      228 => 'yi',
      229 => 'he',
      230 => 'ug',
      231 => 'ur',
      232 => 'ar',
      233 => 'uz-Arab',
      234 => 'tg-Arab',
      235 => 'sd',
      236 => 'fa',
      237 => 'pa-Arab',
      238 => 'ps',
      239 => 'ks',
      240 => 'ku',
      241 => 'dv',
      242 => 'ks-Deva',
      243 => 'kok',
      244 => 'doi',
      245 => 'ne',
      246 => 'pra',
      247 => 'brx',
      248 => 'bra',
      249 => 'mr',
      250 => 'mai',
      251 => 'raj',
      252 => 'sa',
      253 => 'hi',
      254 => 'as',
      255 => 'bn',
      256 => 'mni',
      257 => 'pa',
      258 => 'gu',
      259 => 'or',
      260 => 'ta',
      261 => 'te',
      262 => 'kn',
      263 => 'ml',
      264 => 'si',
      265 => 'th',
      266 => 'lo',
      267 => 'bo',
      268 => 'dz',
      269 => 'my',
      270 => 'ka',
      271 => 'byn',
      272 => 'tig',
      273 => 'ti',
      274 => 'am',
      275 => 'wal',
      276 => 'chr',
      277 => 'iu',
      278 => 'oj',
      279 => 'cr',
      280 => 'km',
      281 => 'mn-Mong',
      282 => 'shi-Tfng',
      283 => 'tzm',
      284 => 'yue',
      285 => 'ja',
      286 => 'zh',
      287 => 'zh-Hant',
      288 => 'ii',
      289 => 'vai',
      290 => 'jv-Java',
      291 => 'ko',
    ),
  ),
  'env-editor' => 
  array (
    'paths' => 
    array (
      'env' => 'E:\\raqmi plus\\yoori\\ass',
      'backupDirectory' => 'env-editor',
    ),
    'envFileName' => '.env',
    'route' => 
    array (
      'prefix' => 'env-editor',
      'name' => 'env-editor',
      'middleware' => 
      array (
        0 => 'web',
      ),
    ),
    'timeFormat' => 'd/m/Y H:i:s',
    'layout' => 'env-editor::layout',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
        'output_encoding' => '',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => NULL,
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
      'db' => 
      array (
        'connection' => NULL,
      ),
    ),
    'temporary_files' => 
    array (
      'local_path' => 'E:\\raqmi plus\\yoori\\ass\\storage\\framework/cache/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'ignoreNonStrings' => false,
    'cachePath' => 'E:\\raqmi plus\\yoori\\ass\\storage\\app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => true,
        'AutoFormat.RemoveEmpty' => true,
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'target',
          2 => 'Enum#_blank,_self,_target,_top',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
      ),
    ),
  ),
  'mollie' => 
  array (
    'key' => 'test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
