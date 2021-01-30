<?php
    $view->script('flights', 'robingoeppert/weglide:js/flights.js', ['jquery', 'uikit']);
?>

<div data-weglide-flights-widget onload="loadFlightsData(this, '<?= $widget_id ?>')">
    <i class="uk-icon-spinner uk-icon-large uk-icon-spin" style="width: 100%; text-align: center;"></i>
</div>