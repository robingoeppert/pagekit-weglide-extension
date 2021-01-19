<?php

return [
    'name' => 'robingoeppert/weglide/widget-flights',

    'label' => 'Weglide Flights',

    'events' => [
        'view.scripts' => function($event, $scripts) use($app) {
            $scripts->register('widget-flights', 'robingoeppert/weglide:app/bundle/widget-flights.js', ['~widgets']);
        }
    ],

    'render' => function($widget) use($app) {
        return $app->view('robingoeppert/weglide/widget-flights.php');
    }
];

?>