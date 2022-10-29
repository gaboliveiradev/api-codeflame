<?php

namespace App\Controller;

use App\Services\ReadFileService;

class AutoloadController {

    public static function returnRows() {
        $service = new ReadFileService();
        echo $service->readAutoload();
    }
}