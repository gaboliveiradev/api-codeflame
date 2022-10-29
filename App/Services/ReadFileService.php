<?php

namespace App\Services;

class ReadFileService {

    public $arr_rows = [];

    public function readAutoload() {
        $arq = fopen("./Template/autoload.php", "r");
        $i = 0;

        while(!feof($arq)) {
            $row = fgets($arq);
            $arr_rows[$i] = $row;
            $i++;
        }

        fclose($arq);

        return json_encode($arr_rows);
    }
}