<?php
    $view->script('flights', 'robingoeppert/weglide:js/flights.js', ['jquery', 'uikit']);
?>

<div data-weglide-flights-widget onload="loadFlightsData(this)"></div>