<?php

namespace App\Controller;

use App\Services\ReadDaoService;

class DaoController {
    
    public static function returnRows() {
        $service = new ReadDaoService();
        echo $service->readDAO();
    }
    
}