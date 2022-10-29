<?php

namespace App\Controller;

use App\Services\ReadDAOService;

class DAOController {
    
    public static function returnRows() {
        $service = new ReadDAOService();
        echo $service->readDAO();
    }
}