<?php
// config/docs.php

return [
    /*
     * The packages that will be displayed
     */
    'packages' => [
        'docs' => [
            'githubUrl' => 'https://github.com/onetoefoot/docs',
            'title' => 'Docs',
            'description' => 'A simple way I manage package documentation',
            'versions' => ['v1'],
        ],
    ],
    /*
     * The default top menu items
     * filename => title
     */
    'menu_base' => [
        'introduction' => 'Introduction',
        'requirements' => 'Requirements',
        'installation-setup' => 'Installation and setup',
        'questions-issues' => 'Questions and issues',
        'changelog' => 'Changelog'
    ],

    /*
     * If set to false, views are taken from vendor
     */
    'views_enabled' => env('DOCS_VIEW_ENABLED', false),

    /*
     *  Path to views, path is from resources/views/
     */
    'views_path' => env('DOCS_VIEW_PATH', '/docs'),
];
