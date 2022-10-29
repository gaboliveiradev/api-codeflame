<?php

namespace App\Services;

class ReadModelService {

    public $arr_rows = [];

    public function readModel() {
        $arq = fopen("./Template/App/Model/Model.php", "r");
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