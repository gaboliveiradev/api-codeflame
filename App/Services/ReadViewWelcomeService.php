<?php

namespace App\Services;

class ReadViewWelcomeService {

    public $arr_rows = [];

    public function readViewWelcome() {
        $arq = fopen("./Template/App/View/modules/welcome/welcome.php", "r");
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