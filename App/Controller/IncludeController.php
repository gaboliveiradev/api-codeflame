<?php

namespace App\Controller;

use App\Services\ReadIncludeService;

class IncludeController {

    public static function returnRowsCssConfig() {
        $service = new ReadIncludeService();
        echo $service->readCssConfig();
    }

    public static function returnRowsJsConfig() {
        $service = new ReadIncludeService();
        echo $service->readJsConfig();
    }

}