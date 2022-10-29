<?php

namespace App\Controller;

use App\Services\ReadWelcomeControllerService;

class WelcomeControllerController {

    public static function returnRows() {
        $service = new ReadWelcomeControllerService();
        echo $service->readWelcomeController();
    }
}