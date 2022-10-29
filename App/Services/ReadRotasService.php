<?php

namespace App\Services;

class ReadRotasService {

    public $arr_rows = [];

    public function readRotas() {
        $arq = fopen("./Template/rotas.php", "r");
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