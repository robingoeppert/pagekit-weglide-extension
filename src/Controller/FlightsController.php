<?php

namespace Robingoeppert\Weglide\Controller;

use Pagekit\Application as App;
use Pagekit\Widget\Model\Widget;
use Symfony\Component\HttpFoundation\Request;

class FlightsController {

    public function indexAction(Request $request) {
        $widget_id = $request->query->get('widget_id');

        if (!$widget_id) {
            return $this->error_response('Missing required GET parameter widget_id');
        }

        $widget = Widget::where(['id' => $widget_id])->first();

        if (!$widget) {
            return $this->error_response("Widget with ID $widget_id does not exist");
        }

        $query = $widget->get('query_params');

        if (!$query) {
            return $this->error_response('No query configured for this widget, please check widget config');
        }

        $query = ltrim($query, '?');

        $config = App::module('robingoeppert/weglide')->config;
        
        $base_url = $config['flights']['url'];
        $base_url = rtrim($base_url, '/');
        $base_url = rtrim($base_url, '?');
        $base_url = rtrim($base_url, '/');

        $url = $base_url . '?' . $query;
	
		$process = curl_init($url);	
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($process);
        
        return ['error' => false, 'data' => json_decode($result)];
    }

    private function error_response($message) {
        return ['error' => true, 'message' => $message];
    }

}