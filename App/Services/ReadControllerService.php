<?php

namespace App\Services;

class ReadControllerService {

    public $arr_rows = [];

    public function readController() {
        $arq = fopen("./Template/App/Controller/Controller.php", "r");
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