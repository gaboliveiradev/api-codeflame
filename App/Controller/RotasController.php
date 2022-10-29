<?php

namespace App\Controller;

use App\Services\ReadRotasService;

class RotasController {

    public static function returnRows() {
        $service = new ReadRotasService();
        echo $service->readRotas();
    }

}