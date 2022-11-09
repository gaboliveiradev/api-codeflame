<?php

namespace App\Controller;

use App\Services\ReadFileService;

class ReadFileController {

    public static function returnRows(string $filePath) {
        $service = new ReadFileService();
        echo $service->readFile($filePath);
        
    }
}
