<?php

namespace App\Services;

class ReadFileService {

    public $arr_rows = [];

    public function readFile(string $filePath) {
        $file = fopen($filePath, "r");
        $i = 0;

        while(!feof($file)) {
            $row = fgets($file);
            $arr_rows[$i] = $row;
            $i++;
        }

        fclose($file);

        return json_encode([
            "all_file_rows" => $arr_rows,
        ]);
    }
    
}