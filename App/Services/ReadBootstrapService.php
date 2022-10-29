<?php

namespace App\Services;

class ReadBootstrapService {

    public $arr_rows = [];

    public function readBootstrapCss() {
        $arq = fopen("./Template/App/View/bootstrap/css/bootstrap.min.css.map", "r");
        $i = 0;

        while(!feof($arq)) {
            $row = fgets($arq);
            $arr_rows[$i] = $row;
            $i++;
        }

        fclose($arq);

        return json_encode($arr_rows);
    }

    public function readBootstrapJs() {
        $arq = fopen("./Template/App/View/bootstrap/js/bootstrap.bundle.min.js", "r");
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