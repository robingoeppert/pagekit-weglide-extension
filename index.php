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
     * Define nodes. A node is similar to a route with the difference
     * that it can be placed anywhere in the menu structure. The
     * resulting route is therefore determined on runtime.
     */
    'nodes' => [

    ],

    /*
     * Define menu items for the backend.
     */
    'menu' => [

    ],

    /*
     * Define permissions.
     * Will be listed in backend and can then be assigned to certain roles.
     */
    'permissions' => [

    ],

    /*
     * Link to a views screen from the extensions listing.
     */
    'views' => [

    ],

    /*
     * Default module configuration.
     * Can be overwritten by changed config during runtime.
     */
    'config' => [
        'flights' => [
            'url' => 'https://api.weglide.org/v1/flight?airport_id_in=156649&order_by=-scoring_date&limit=5'
        ]
    ],

    /*
     * Listen to events.
     */
    'events' => [

    ],

    'widgets' => [
        'widgets/flights.php'
    ],

    'positions' => [
        
    ],

    'routes' => [
        
    ],

    'menu' => [
        
    ],

    'resources' => [
        'robingoeppert/weglide:' => ''
    ]
];

?>