<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CMS route prefix
    |--------------------------------------------------------------------------
    */

    'cms_route_prefix' => 'admin',


    /*
    |--------------------------------------------------------------------------
    | API route prefix
    |--------------------------------------------------------------------------
    */

    'api_route_prefix' => 'api',


    /*
    |--------------------------------------------------------------------------
    | CMS assets
    |--------------------------------------------------------------------------
    */

    'cms_assets' => [

        /*
	    |--------------------------------------------------------------------------
	    | Used styles. You can add or remove any
	    |--------------------------------------------------------------------------
	    */

        'styles' => [
            'asset?path=css/font-awesome/css/font-awesome.min.css',
            'asset?path=css/bootstrap.min.css',
            'asset?path=css/dataTables.min.css',
            'asset?path=css/select2.min.css',
            'asset?path=css/main.min.css',
            'asset?path=css/viddy.css'
        ],


        /*
	    |--------------------------------------------------------------------------
	    | Used scripts. You can add or remove any
	    |--------------------------------------------------------------------------
	    */

        'scripts' => [
            'asset?path=js/jquery.min.js',
            'asset?path=js/jquery-ui.min.js',
            'asset?path=js/dataTables.min.js',
            'asset?path=js/dataTables.buttons.min.js',
            'asset?path=js/jszip.min.js',
            'asset?path=js/pdfmake.min.js',
            'asset?path=js/vfs_fonts.js',
            'asset?path=js/buttons.html5.min.js',
            'asset?path=js/select2.min.js',
            'https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js',
            'asset?path=js/main.js',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | CMS branding
    |--------------------------------------------------------------------------
    */

    'favicon' => [
        'apple-icon-57x57' => 'asset?path=favicon/viddy/favicon.ico',
        'apple-icon-60x60' => 'asset?path=favicon/viddy/favicon.ico',
        'apple-icon-72x72' => 'asset?path=favicon/viddy/favicon.ico',
        'apple-icon-76x76' => 'asset?path=favicon/viddy/favicon.ico',
        'apple-icon-114x114' => 'asset?path=favicon/viddy/favicon.ico',
        'apple-icon-120x120' => 'asset?path=favicon/viddy/favicon.ico',
        'apple-icon-144x144' => 'asset?path=favicon/viddy/favicon.ico',
        'apple-icon-152x152' => 'asset?path=favicon/viddy/favicon.ico',
        'apple-icon-180x180' => 'asset?path=favicon/viddy/favicon.ico',
        'android-icon-192x192' => 'asset?path=favicon/viddy/favicon.ico',
        'favicon-32x32' => 'asset?path=favicon/viddy/favicon.ico',
        'favicon-96x96' => 'asset?path=favicon/viddy/favicon.ico',
        'favicon-16x16' => 'asset?path=favicon/viddy/favicon.ico',
        'msapplication-TileImage' => 'asset?path=favicon/viddy/favicon.ico',
    ],
    'logo' => 'asset?path=images/viddy-logo.png',
    'loading' => 'asset?path=images/viddy-logo.png',
    'footer_slogan' => 'Viddy Production',
    'footer_copyright' => 'V0.1 All Right Reserved.</a>',
    'tab_title' => 'VIDDY | CMS',
    'home_title' => 'VIDDY CMS',
    'home_content' => '',


    /*
    |--------------------------------------------------------------------------
    | CKEditor
    |--------------------------------------------------------------------------
    */

    'ckeditor' => [
        'colors' => [],
    ],


    /*
    |--------------------------------------------------------------------------
    | Storage
    |--------------------------------------------------------------------------
    */

    'use_original_name' => false,


    /*
    |--------------------------------------------------------------------------
    | Tinify
    |--------------------------------------------------------------------------
    */

    'tinify' => [
        'key' => null
    ],

];
