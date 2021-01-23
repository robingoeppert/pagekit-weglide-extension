<?php

namespace Robingoeppert\Weglide\Controller;

use Pagekit\Application as App;

class FlightsController {

    public function indexAction() {
        header("Content-Type: application/json");
		
		$config = App::module('robingoeppert/weglide')->config;
		$url = $config['flights']['url'];
	
		$process = curl_init($url);	
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($process);
		
		$len = curl_getinfo($process, CURLINFO_SIZE_DOWNLOAD);
		header("Content-Length: $len");
		echo($result);
    }

}