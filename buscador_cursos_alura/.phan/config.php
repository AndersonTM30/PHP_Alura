<?php
    return [
        "target_php_version" => '8.1.10',
        'directory_list' => [
            'src',
            'vendor/symfony/dom-crawler',
            'vendor/guzzlehttp/guzzle',
            'vendor/psr/http-message'
        ],
        "exclude_analysis_directory_list" => [
            'vendor/'
        ],
        "plugins" => [
            'AlwaysReturnPlugin',
            'UnreachableCodePlugin',
            'DollarDollarPlugin',
            'DuplicateArraykeyPlugin',
            'PregRegexCheckerPlugin',
            'PrintfCheckerPlugin'
        ],

    ];