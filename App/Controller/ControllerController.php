<?php

namespace App\Controller;

use App\Services\ReadControllerService;

class ControllerController {

    public static function returnRows() {
        $service = new ReadControllerService();
        echo $service->readController();
    }
}