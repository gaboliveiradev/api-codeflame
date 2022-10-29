<?php

namespace App\Services;

class ReadConfigService {

    public $arr_rows = [];

    public function readConfig() {
        $arq = fopen("./Template/App/config.php", "r");
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