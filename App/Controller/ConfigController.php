<?php

namespace App\Controller;

use App\Services\ReadConfigService;

class ConfigController {

    public static function returnRows() {
        $service = new ReadConfigService();
        echo $service->readConfig();
    }
}