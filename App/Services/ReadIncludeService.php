<?php

namespace App\Services;

class ReadIncludeService {

    public $arr_rows = [];

    public function readCssConfig() {
        $arq = fopen("./Template/App/View/includes/css_config.php", "r");
        $i = 0;

        while(!feof($arq)) {
            $row = fgets($arq);
            $arr_rows[$i] = $row;
            $i++;
        }

        fclose($arq);

        return json_encode($arr_rows);
    }

    public function readJsConfig() {
        $arq = fopen("./Template/App/View/includes/js_config.php", "r");
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