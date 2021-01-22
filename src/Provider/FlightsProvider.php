<?php

namespace Robingoeppert\Weglide\Provider;

use Pagekit\Application as App;

class FlightsProvider {

    public function get_flights() {
		$config = App::module('robingoeppert/weglide')->config;
		$url = $config['flights']['url'];
	
		$process = curl_init($url);	
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($process);
		
		return json_decode($result, true);
    }
}