<?php

namespace Robingoeppert\Weglide\Controller;

use Pagekit\Application as App;

/**
 * @Access(admin=true)
 */
class SettingsController {

    public function indexAction() {
        return [
            '$view' => [
                'title' => 'Weglide Settings',
                'name'  => 'robingoeppert/weglide:views/admin/settings.php'
            ],
            '$data' => [
                'config' => App::module('robingoeppert/weglide')->config()
            ]
        ];
    }
}