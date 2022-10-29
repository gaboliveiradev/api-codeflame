<?php

namespace App\Controller;

use App\Services\ReadModelService;

class ModelController {

    public static function returnRows() {
        $service = new ReadModelService();
        echo $service->readModel();
    }
}