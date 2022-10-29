<?php

namespace App\Controller;

use App\Services\ReadBootstrapService;

class ReadBootstrapController {

    public static function returnRowsCss() {
        $service = new ReadBootstrapService();
        echo $service->readBootstrapCss();
    }

    public static function returnRowsJs() {
        $service = new ReadBootstrapService();
        echo $service->readBootstrapJs();
    }
}