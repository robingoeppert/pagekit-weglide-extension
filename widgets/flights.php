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
        $config = $app->module('robingoeppert/weglide')->config;
        $flight_details_url = $config['connection']['ui']['base_url'] . $config['connection']['ui']['flight_details'];
        $credits_url = $config['connection']['ui']['base_url'];

        return $app->view('robingoeppert/weglide/widget-flights.php', [
            'widget_id' => $widget->id,
            'flight_details_url' => $flight_details_url,
            'credits_url' => $credits_url
        ]);
    }
];

?>