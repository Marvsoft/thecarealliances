<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'admin_path' => 'admin',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:KAKEYxs72iP0ZgoD3/8lKq/Z6ILFULy1Bu8ojuFikXA=',
    'version' => NULL,
    'cipher' => 'AES-256-CBC',
    'maintenance' => 
    array (
      'driver' => 'file',
    ),
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
      22 => 'Prettus\\Repository\\Providers\\RepositoryServiceProvider',
      23 => 'Konekt\\Concord\\ConcordServiceProvider',
      24 => 'App\\Providers\\AppServiceProvider',
      25 => 'App\\Providers\\AuthServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'Devi\\Admin\\Providers\\AdminServiceProvider',
      29 => 'Devi\\Core\\Providers\\CoreServiceProvider',
      30 => 'Devi\\UI\\Providers\\UIServiceProvider',
      31 => 'Devi\\User\\Providers\\UserServiceProvider',
      32 => 'Devi\\Post\\Providers\\PostServiceProvider',
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
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
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
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
      'PDF' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'user',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'user' => 
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
        'model' => 'Devi\\User\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'user_password_resets',
        'expire' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'breadcrumbs' => 
  array (
    'view' => 'breadcrumbs::bootstrap5',
    'files' => 'C:\\xampp\\htdocs\\thecarealliances\\routes/breadcrumbs.php',
    'unnamed-route-exception' => true,
    'missing-route-bound-breadcrumb-exception' => true,
    'invalid-named-breadcrumb-exception' => true,
    'manager-class' => 'Diglactic\\Breadcrumbs\\Manager',
    'generator-class' => 'Diglactic\\Breadcrumbs\\Generator',
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
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
          'host' => 'api-mt1.pusher.com',
          'port' => '443',
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
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
        'path' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\framework/cache/data',
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
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'laravel_cache_',
  ),
  'concord' => 
  array (
    'modules' => 
    array (
      0 => 'Devi\\Admin\\Providers\\ModuleServiceProvider',
      1 => 'Devi\\Core\\Providers\\ModuleServiceProvider',
      2 => 'Devi\\UI\\Providers\\ModuleServiceProvider',
      3 => 'Devi\\User\\Providers\\ModuleServiceProvider',
      4 => 'Devi\\Post\\Providers\\ModuleServiceProvider',
    ),
    'register_route_models' => true,
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'admin/web-forms/forms/*',
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
    'supports_credentials' => false,
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
        'database' => 'thecarealliances',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'thecarealliances',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'thecarealliances',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'thecarealliances',
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
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'duration_background' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
        'slow_threshold' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
        'exclude_paths' => 
        array (
        ),
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      'C:\\xampp\\htdocs\\thecarealliances\\public\\storage' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\app/public',
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
        ),
      ),
    ),
    'send_logs_as_events' => true,
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
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => 'C:\\xampp\\htdocs\\thecarealliances',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\Recorders\\DumpRecorder\\DumpRecorder',
      1 => 'Spatie\\LaravelIgnition\\Recorders\\JobRecorder\\JobRecorder',
      2 => 'Spatie\\LaravelIgnition\\Recorders\\LogRecorder\\LogRecorder',
      3 => 'Spatie\\LaravelIgnition\\Recorders\\QueryRecorder\\QueryRecorder',
    ),
    'open_ai_key' => NULL,
    'with_stack_frame_arguments' => true,
    'argument_reducers' => 
    array (
      0 => 'Spatie\\Backtrace\\Arguments\\Reducers\\BaseTypeArgumentReducer',
      1 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ArrayArgumentReducer',
      2 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StdClassArgumentReducer',
      3 => 'Spatie\\Backtrace\\Arguments\\Reducers\\EnumArgumentReducer',
      4 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ClosureArgumentReducer',
      5 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeArgumentReducer',
      6 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeZoneArgumentReducer',
      7 => 'Spatie\\Backtrace\\Arguments\\Reducers\\SymphonyRequestArgumentReducer',
      8 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\ModelArgumentReducer',
      9 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\CollectionArgumentReducer',
      10 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StringableArgumentReducer',
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'image-optimizer' => 
  array (
    'optimizers' => 
    array (
      'Spatie\\ImageOptimizer\\Optimizers\\Jpegoptim' => 
      array (
        0 => '-m85',
        1 => '--strip-all',
        2 => '--all-progressive',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Pngquant' => 
      array (
        0 => '--force',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Optipng' => 
      array (
        0 => '-i0',
        1 => '-o2',
        2 => '-quiet',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Svgo' => 
      array (
        0 => '--disable=cleanupIDs',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Gifsicle' => 
      array (
        0 => '-b',
        1 => '-O3',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Cwebp' => 
      array (
        0 => '-m 6',
        1 => '-pass 10',
        2 => '-mt',
        3 => '-q 90',
      ),
    ),
    'binary_path' => '',
    'timeout' => 60,
    'log_optimizer_activity' => false,
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => NULL,
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\logs/laravel.log',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
        'replace_placeholders' => true,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
        'replace_placeholders' => true,
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
          'connectionString' => 'tls://:',
        ),
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
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
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
        'facility' => 8,
        'replace_placeholders' => true,
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\logs/laravel.log',
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
        'host' => 'mailpit',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'local_domain' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
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
      'address' => 'hello@example.com',
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\thecarealliances\\resources\\views/vendor/mail',
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
        'region' => 'us-east-1',
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
  'repository' => 
  array (
    'pagination' => 
    array (
      'limit' => 15,
    ),
    'fractal' => 
    array (
      'params' => 
      array (
        'include' => 'include',
      ),
      'serializer' => 'League\\Fractal\\Serializer\\DataArraySerializer',
    ),
    'cache' => 
    array (
      'enabled' => false,
      'minutes' => 30,
      'repository' => 'cache',
      'clean' => 
      array (
        'enabled' => true,
        'on' => 
        array (
          'create' => true,
          'update' => true,
          'delete' => true,
        ),
      ),
      'params' => 
      array (
        'skipCache' => 'skipCache',
      ),
      'allowed' => 
      array (
        'only' => NULL,
        'except' => NULL,
      ),
    ),
    'criteria' => 
    array (
      'acceptedConditions' => 
      array (
        0 => '=',
        1 => 'like',
        2 => 'in',
      ),
      'params' => 
      array (
        'search' => 'search',
        'searchFields' => 'searchFields',
        'filter' => 'filter',
        'orderBy' => 'orderBy',
        'sortedBy' => 'sortedBy',
        'with' => 'with',
        'searchJoin' => 'searchJoin',
        'withCount' => 'withCount',
      ),
    ),
    'generator' => 
    array (
      'basePath' => 'C:\\xampp\\htdocs\\thecarealliances\\app',
      'rootNamespace' => 'App\\',
      'stubsOverridePath' => 'C:\\xampp\\htdocs\\thecarealliances\\app',
      'paths' => 
      array (
        'models' => 'Entities',
        'repositories' => 'Repositories',
        'interfaces' => 'Repositories',
        'transformers' => 'Transformers',
        'presenters' => 'Presenters',
        'validators' => 'Validators',
        'controllers' => 'Http/Controllers',
        'provider' => 'RepositoryServiceProvider',
        'criteria' => 'Criteria',
      ),
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
      5 => 'localhost',
    ),
    'guard' => 
    array (
      0 => 'user',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
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
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\thecarealliances\\resources\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\thecarealliances\\storage\\framework\\views',
  ),
  'acl' => 
  array (
    0 => 
    array (
      'key' => 'dashboard',
      'name' => 'admin::app.layouts.dashboard',
      'route' => 'admin.dashboard.index',
      'sort' => 1,
    ),
    1 => 
    array (
      'key' => 'post',
      'name' => 'admin::app.layouts.posts',
      'route' => 'admin.posts.index',
      'sort' => 2,
    ),
    2 => 
    array (
      'key' => 'settings',
      'name' => 'admin::app.acl.settings',
      'route' => 'admin.settings.index',
      'sort' => 2,
    ),
    3 => 
    array (
      'key' => 'settings.user',
      'name' => 'admin::app.acl.user',
      'route' => 
      array (
        0 => 'admin.settings.groups.index',
        1 => 'admin.settings.roles.index',
        2 => 'admin.settings.users.index',
      ),
      'sort' => 1,
    ),
    4 => 
    array (
      'key' => 'settings.user.roles',
      'name' => 'admin::app.acl.roles',
      'route' => 'admin.settings.roles.index',
      'sort' => 2,
    ),
    5 => 
    array (
      'key' => 'settings.user.roles.create',
      'name' => 'admin::app.acl.create',
      'route' => 
      array (
        0 => 'admin.settings.roles.create',
        1 => 'admin.settings.roles.store',
      ),
      'sort' => 1,
    ),
    6 => 
    array (
      'key' => 'settings.user.roles.edit',
      'name' => 'admin::app.acl.edit',
      'route' => 
      array (
        0 => 'admin.settings.roles.edit',
        1 => 'admin.settings.roles.update',
      ),
      'sort' => 2,
    ),
    7 => 
    array (
      'key' => 'settings.user.roles.delete',
      'name' => 'admin::app.acl.delete',
      'route' => 'admin.settings.roles.delete',
      'sort' => 3,
    ),
    8 => 
    array (
      'key' => 'settings.user.users',
      'name' => 'admin::app.acl.users',
      'route' => 'admin.settings.users.index',
      'sort' => 3,
    ),
    9 => 
    array (
      'key' => 'settings.user.users.create',
      'name' => 'admin::app.acl.create',
      'route' => 
      array (
        0 => 'admin.settings.users.create',
        1 => 'admin.settings.users.store',
      ),
      'sort' => 1,
    ),
    10 => 
    array (
      'key' => 'settings.user.users.edit',
      'name' => 'admin::app.acl.edit',
      'route' => 
      array (
        0 => 'admin.settings.users.edit',
        1 => 'admin.settings.users.update',
        2 => 'admin.settings.users.mass_update',
      ),
      'sort' => 2,
    ),
    11 => 
    array (
      'key' => 'settings.user.users.delete',
      'name' => 'admin::app.acl.delete',
      'route' => 
      array (
        0 => 'admin.settings.users.delete',
        1 => 'admin.settings.users.mass_delete',
      ),
      'sort' => 3,
    ),
    12 => 
    array (
      'key' => 'posts',
      'name' => 'admin::app.acl.posts',
      'route' => 
      array (
        0 => 'admin.posts.index',
      ),
      'sort' => 1,
    ),
  ),
  'menu' => 
  array (
    'admin' => 
    array (
      0 => 
      array (
        'key' => 'dashboard',
        'name' => 'admin::app.layouts.dashboard',
        'route' => 'admin.dashboard.index',
        'sort' => 1,
        'icon-class' => 'dashboard-icon',
      ),
      1 => 
      array (
        'key' => 'post',
        'name' => 'admin::app.layouts.post',
        'route' => 'admin.posts.index',
        'sort' => 2,
        'icon-class' => 'settings-icon',
      ),
      2 => 
      array (
        'key' => 'post.posts',
        'name' => 'admin::app.layouts.post',
        'route' => 'admin.posts.index',
        'sort' => 1,
        'icon-class' => 'posts-icon',
      ),
      3 => 
      array (
        'key' => 'post.category',
        'name' => 'admin::app.layouts.category',
        'route' => 'admin.category.index',
        'sort' => 2,
        'icon-class' => 'posts-icon',
      ),
      4 => 
      array (
        'key' => 'post.tags',
        'name' => 'admin::app.layouts.tags',
        'route' => 'admin.tags.index',
        'sort' => 2,
        'icon-class' => 'posts-icon',
      ),
      5 => 
      array (
        'key' => 'customer',
        'name' => 'Customer List',
        'route' => 'admin.customers.index',
        'sort' => 3,
        'icon-class' => 'avatar-icon',
      ),
      6 => 
      array (
        'key' => 'alliance',
        'name' => 'Alliance',
        'route' => 'admin.resources.index',
        'sort' => 4,
        'icon-class' => 'tools-icon',
      ),
      7 => 
      array (
        'key' => 'alliance.who-am-i',
        'name' => 'admin::app.alliance.title',
        'route' => 'admin.resources.index',
        'sort' => 1,
      ),
      8 => 
      array (
        'key' => 'alliance.resource',
        'name' => 'Resource',
        'route' => 'admin.resources.index',
        'sort' => 2,
      ),
      9 => 
      array (
        'key' => 'alliance.i-can-help',
        'name' => 'I Can Help',
        'route' => 'admin.resources.index',
        'sort' => 3,
      ),
      10 => 
      array (
        'key' => 'alliance.i-need-help',
        'name' => 'I Need Help',
        'route' => 'admin.resources.index',
        'sort' => 4,
      ),
      11 => 
      array (
        'key' => 'services',
        'name' => 'Services',
        'route' => 'admin.services.index',
        'sort' => 5,
        'icon-class' => 'leads-icon',
      ),
      12 => 
      array (
        'key' => 'settings',
        'name' => 'admin::app.layouts.settings',
        'route' => 'admin.settings.index',
        'sort' => 6,
        'icon-class' => 'settings-icon',
      ),
      13 => 
      array (
        'key' => 'settings.user',
        'name' => 'admin::app.layouts.user',
        'route' => 'admin.settings.groups.index',
        'info' => 'admin::app.layouts.user-info',
        'sort' => 1,
      ),
      14 => 
      array (
        'key' => 'settings.user.roles',
        'name' => 'admin::app.layouts.roles',
        'info' => 'admin::app.layouts.roles-info',
        'route' => 'admin.settings.roles.index',
        'sort' => 2,
        'icon-class' => 'role-icon',
      ),
      15 => 
      array (
        'key' => 'settings.user.users',
        'name' => 'admin::app.layouts.users',
        'info' => 'admin::app.layouts.users-info',
        'route' => 'admin.settings.users.index',
        'sort' => 3,
        'icon-class' => 'user-icon',
      ),
    ),
  ),
  'core_config' => 
  array (
    0 => 
    array (
      'key' => 'general',
      'name' => 'admin::app.configuration.general',
      'sort' => 1,
    ),
    1 => 
    array (
      'key' => 'general.locale_settings',
      'name' => 'admin::app.configuration.locale-settings',
      'sort' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'locale',
          'title' => 'admin::app.configuration.locale',
          'type' => 'select',
          'data_source' => 'Devi\\Core\\Core@locales',
        ),
      ),
    ),
  ),
);
