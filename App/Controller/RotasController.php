<?php

namespace App\Controller;

use App\Services\ReadRotasServices;

class RotasController {

    public static function returnRows() {
        $service = new ReadRotasServices();
        echo $service->readRotas();
    }

}