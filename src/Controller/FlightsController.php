<?php

namespace Robingoeppert\Weglide\Controller;

use Pagekit\Application as App;
use Symfony\Component\HttpFoundation\Request;

class FlightsController {

    public function indexAction(Request $request) {
        $query = $request->server->get('QUERY_STRING');

        $config = App::module('robingoeppert/weglide')->config;
        
        $base_url = $config['flights']['url'];
        $base_url = rtrim($base_url, '/');
        $base_url = rtrim($base_url, '?');
        $base_url = rtrim($base_url, '/');

        $url = $base_url . '?' . $query;

        header("Content-Type: application/json");
	
		$process = curl_init($url);	
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($process);
		
		$len = curl_getinfo($process, CURLINFO_SIZE_DOWNLOAD);
		header("Content-Length: $len");
		echo($result);
    }

}