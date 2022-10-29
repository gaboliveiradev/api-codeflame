<?php

namespace App\Controller;

use App\Services\ReadViewWelcomeService;

class ViewWelcomeController {

    public static function returnRows() {
        $service = new ReadViewWelcomeService();
        echo $service->readViewWelcome();
    }
}