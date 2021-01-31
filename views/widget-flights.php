<?php
    $view->script('flights', 'robingoeppert/weglide:js/flights.js', ['jquery', 'uikit']);
?>

<div data-weglide-flights-widget onload="loadFlightsWidget(this, '<?= $widget_id ?>', '<?= $flight_details_url ?>', '<?= $credits_url ?>')">
    <i class="uk-icon-spinner uk-icon-large uk-icon-spin" style="width: 100%; text-align: center;"></i>
</div>