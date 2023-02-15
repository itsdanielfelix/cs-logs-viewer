<?php

use Opcodes\LogViewer\Level;

return [

    /*
    |--------------------------------------------------------------------------
    | Log Viewer
    |--------------------------------------------------------------------------
    | Log Viewer can be disabled, so it's no longer accessible via browser.
    |
    */

    'enabled' => env('LOG_VIEWER_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Log Viewer Domain
    |--------------------------------------------------------------------------
    | You may change the domain where Log Viewer should be active.
    | If the domain is empty, all domains will be valid.
    |
    */

    'route_domain' => null,

    /*
    |--------------------------------------------------------------------------
    | Log Viewer Route
    |--------------------------------------------------------------------------
    | Log Viewer will be available under this URL.
    |
    */

    'route_path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Back to system URL
    |--------------------------------------------------------------------------
    | When set, displays a link to easily get back to this URL.
    | Set to `null` to hide this link.
    |
    | Optional label to display for the above URL.
    |
    */

    'back_to_system_url' => null,

    'back_to_system_label' => null, // Displayed by default: "Back to {{ app.name }}"

    /*
    |--------------------------------------------------------------------------
    | Log Viewer route middleware.
    |--------------------------------------------------------------------------
    | The middleware should enable session and cookies support in order for the Log Viewer to work.
    | The 'web' middleware will be applied automatically if empty.
    |
    */

    'middleware' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | Include file patterns
    |--------------------------------------------------------------------------
    |
    */

    'include_files' => [
        'v4/*.log',
        'v4-frontend/*.log',
        'v4-webservice/*.log',
        'v4-01/*.log',
        'v4-02/*.log',
        'v4-03/*.log',
        'v4-04/*.log',
        'v4-05/*.log',
        'v4-dev/*.log',
        'v4-dev-01/*.log',
        'v4-dev-02/*.log',
        'v4-dev-03/*.log',
        'v4-dev-04/*.log',
        'v4-dev-05/*.log',
        'v4-stage/*.log',
        'v4-stage-01/*.log',
        'v4-stage-02/*.log',
        'v4-stage-03/*.log',
        'v4-stage-04/*.log',
        'v4-stage-05/*.log',
        'v4-stage2/*.log',
        'v4-stage2-01/*.log',
        'v4-stage2-02/*.log',
        'v4-stage2-03/*.log',
        'v4-stage2-04/*.log',
        'v4-stage2-05/*.log',
        'v4-prod/*.log',
        'v4-prod-01/*.log',
        'v4-prod-02/*.log',
        'v4-prod-03/*.log',
        'v4-prod-04/*.log',
        'v4-prod-05/*.log',
        'v5-contract/*.log',
        'v5-contract-01/*.log',
        'v5-contract-02/*.log',
        'v5-contract-03/*.log',
        'v5-contract-04/*.log',
        'v5-contract-05/*.log',
        'v5-contract-dev/*.log',
        'v5-contract-dev-01/*.log',
        'v5-contract-dev-02/*.log',
        'v5-contract-dev-03/*.log',
        'v5-contract-dev-04/*.log',
        'v5-contract-dev-05/*.log',
        'v5-contract-stage/*.log',
        'v5-contract-stage-01/*.log',
        'v5-contract-stage-02/*.log',
        'v5-contract-stage-03/*.log',
        'v5-contract-stage-04/*.log',
        'v5-contract-stage-05/*.log',
        'v5-contract-stage2/*.log',
        'v5-contract-stage2-01/*.log',
        'v5-contract-stage2-02/*.log',
        'v5-contract-stage2-03/*.log',
        'v5-contract-stage2-04/*.log',
        'v5-contract-stage2-05/*.log',
        'v5-contract-prod/*.log',
        'v5-contract-prod-01/*.log',
        'v5-contract-prod-02/*.log',
        'v5-contract-prod-03/*.log',
        'v5-contract-prod-04/*.log',
        'v5-contract-prod-05/*.log',
        'v5-reporting/*.log',
        'v5-reporting-01/*.log',
        'v5-reporting-02/*.log',
        'v5-reporting-03/*.log',
        'v5-reporting-04/*.log',
        'v5-reporting-05/*.log',
        'v5-reporting-dev/*.log',
        'v5-reporting-dev-01/*.log',
        'v5-reporting-dev-02/*.log',
        'v5-reporting-dev-03/*.log',
        'v5-reporting-dev-04/*.log',
        'v5-reporting-dev-05/*.log',
        'v5-reporting-stage/*.log',
        'v5-reporting-stage-01/*.log',
        'v5-reporting-stage-02/*.log',
        'v5-reporting-stage-03/*.log',
        'v5-reporting-stage-04/*.log',
        'v5-reporting-stage-05/*.log',
        'v5-reporting-stage2/*.log',
        'v5-reporting-stage2-01/*.log',
        'v5-reporting-stage2-02/*.log',
        'v5-reporting-stage2-03/*.log',
        'v5-reporting-stage2-04/*.log',
        'v5-reporting-stage2-05/*.log',
        'v5-reporting-prod/*.log',
        'v5-reporting-prod-01/*.log',
        'v5-reporting-prod-02/*.log',
        'v5-reporting-prod-03/*.log',
        'v5-reporting-prod-04/*.log',
        'v5-reporting-prod-05/*.log',
        '*.log'
    ],

    /*
    |--------------------------------------------------------------------------
    | Exclude file patterns.
    |--------------------------------------------------------------------------
    | This will take precedence over included files.
    |
    */

    'exclude_files' => [
        //'my_secret.log'
    ],

    /*
    |--------------------------------------------------------------------------
    |  Shorter stack trace filters.
    |--------------------------------------------------------------------------
    | Lines containing any of these strings will be excluded from the full log.
    | This setting is only active when the function is enabled via the user interface.
    |
    */

    'shorter_stack_trace_excludes' => [
        '/vendor/symfony/',
        '/vendor/laravel/framework/',
        '/vendor/barryvdh/laravel-debugbar/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Log matching patterns
    |--------------------------------------------------------------------------
    | Regexes for matching log files
    |
    */

    'patterns' => [
        'laravel' => [
            'log_matching_regex' => '/^\[(\d{4}-\d{2}-\d{2}[T ]\d{2}:\d{2}:\d{2}\.?(\d{6}([\+-]\d\d:\d\d)?)?)\].*/',

            /**
             * This pattern, used for processing Laravel logs, returns these results:
             * $matches[0] - the full log line being tested.
             * $matches[1] - full timestamp between the square brackets (includes microseconds and timezone offset)
             * $matches[2] - timestamp microseconds, if available
             * $matches[3] - timestamp timezone offset, if available
             * $matches[4] - contents between timestamp and the severity level
             * $matches[5] - environment (local, production, etc)
             * $matches[6] - log severity (info, debug, error, etc)
             * $matches[7] - the log text, the rest of the text.
             */
            'log_parsing_regex' => '/^\[(\d{4}-\d{2}-\d{2}[T ]\d{2}:\d{2}:\d{2}\.?(\d{6}([\+-]\d\d:\d\d)?)?)\](.*?(\w+)\.|.*?)('
                .implode('|', array_filter(Level::caseValues()))
                .')?: (.*?)( in [\/].*?:[0-9]+)?$/is',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Eager-scan log files
    |--------------------------------------------------------------------------
    | Whether to eagerly scan all log files configured with the Log Viewer.
    | Scanning a log file will create an index for it, which will
    | speed up further navigation of that log file.
    |
    */

    'eager_scan' => env('LOG_VIEWER_EAGER_SCAN', true),

    /*
    |--------------------------------------------------------------------------
    | Cache driver
    |--------------------------------------------------------------------------
    | Cache driver to use for storing the log indices. Indices are used to speed up
    | log navigation. Defaults to your application's default cache driver.
    |
    */

    'cache_driver' => env('LOG_VIEWER_CACHE_DRIVER', null),

    /*
    |--------------------------------------------------------------------------
    | Chunk size when scanning log files lazily
    |--------------------------------------------------------------------------
    | The size in MB of files to scan before updating the progress bar when searching across all files.
    |
    */

    'lazy_scan_chunk_size_in_mb' => 200,
];
