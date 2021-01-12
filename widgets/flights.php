<?php

return [
    'name' => 'weglide/widget-flights',

    'label' => 'Weglide Flights Widget',

    /*
    'events' => [
        'view.scripts' => function($event, $scripts) use($app) {
            $scripts->register('widget-weglide-flights', 'weglide:js/widget-flights.js', ['~widgets']);
        }
    ],*/

    'render' => function($widget) use($app) {
        return $app->view('weglide/widget-flights.php');
    }
];

?>