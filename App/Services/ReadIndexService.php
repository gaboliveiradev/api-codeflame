<?php

namespace App\Services;

class ReadIndexService {

    public $arr_rows = [];

    public function readIndex() {
        $arq = fopen("./Template/App/index.php", "r");
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