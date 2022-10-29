<?php

namespace App\Controller;

use App\Services\ReadIndexService;

class IndexController {

    public static function returnRows() {
        $service = new ReadIndexService();
        echo $service->readIndex();
    }
    
}