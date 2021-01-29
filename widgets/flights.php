<?php

return [
    'name' => 'robingoeppert/weglide/widget-flights',

    'label' => 'Weglide Flights',

    'events' => [
        'view.scripts' => function($event, $scripts) use($app) {
            $scripts->register('robingoeppert-weglide-flights', 'robingoeppert/weglide:app/bundle/widget-flights.js', ['~widgets']);
        }
    ],

    'render' => function($widget) use($app) {
        return $app->view('robingoeppert/weglide/widget-flights.php', ['query' => $widget->get('query_params')]);
    }
];

?>