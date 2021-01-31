<?php

use Pagekit\Application;

return [
    'name' => 'robingoeppert/weglide',

    'type' => 'extension',

    /*
     * Main entry point. Called when your extension is both installed and activated.
     * Either assign an closure or a string that points to a PHP class.
     * Example: 'main' => 'mediatrax\\twitter\\twitterExtension'
     */
    'main' => function (Application $app) {
        
    },

    /*
     * Register all namespaces to be loaded.
     * Map from namespace to folder where the classes are located.
     * Remember to escape backslashes with a second backslash.
     */
    'autoload' => [
        'Robingoeppert\\Weglide\\' => 'src'
    ],

    /*
     * Define permissions.
     * Will be listed in backend and can then be assigned to certain roles.
     */
    'permissions' => [
        'weglide: edit settings' => [
			'title' => 'Edit Weglide Settings',
			'description' => 'Allows to edit settings of the Weglide extension'
		]
    ],

    /*
     * Default module configuration.
     * Can be overwritten by changed config during runtime.
     */
    'config' => [
        'connection' => [
            'api' => [
                'base_url' => 'https://api.weglide.org',
                'flights_request' => '/v1/flight'
            ],
            'ui' => [
                'base_url' => 'https://beta.weglide.org',
                'flight_details' => '/flights'
            ]
        ]
    ],

    'widgets' => [
        'widgets/flights.php'
    ],

    'routes' => [
        '@weglide/settings' => [
            'path' => '/weglide/settings',
            'controller' => 'Robingoeppert\\Weglide\\Controller\\SettingsController'
        ],

        '@weglide/flights' => [
            'path' => '/weglide/flights',
            'controller' => 'Robingoeppert\\Weglide\\Controller\\FlightsController'
        ]
    ],

    'menu' => [
        'weglide' => [
			'label' => 'Weglide',
			'icon' => 'robingoeppert/weglide:icon.svg',
			'url' => '@weglide/settings',
			'access' => 'weglide: edit settings'
		],
		'webcam: settings' => [
            'label' => 'Settings',
            'parent' => 'weglide',
            'url' => '@weglide/settings',
            'access' => 'weglide: edit settings'
        ]
    ],

    'settings' => '@weglide/settings',

    'resources' => [
        'robingoeppert/weglide:' => ''
    ]
];

?>