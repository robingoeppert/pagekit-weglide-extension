<?php 

use Robingoeppert\Weglide\Provider\FlightsProvider;

$flightsProvider = new FlightsProvider();
$data = $flightsProvider->get_flights();

?>

<ul>
    <?php foreach ($data as $flight) { ?>
        <li><?= round($flight['contest']['distance']) ?>km, <?= $flight['user']['name'] ?></li>
    <?php } ?>
</ul>