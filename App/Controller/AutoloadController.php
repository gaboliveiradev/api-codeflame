<?php

namespace App\Controller;

use App\Services\ReadAutoloadService;

class AutoloadController {

    public static function returnRows() {
        $service = new ReadAutoloadService();
        echo $service->readAutoload();
    }
    
}