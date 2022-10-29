<?php

namespace App\Services;

class ReadWelcomeControllerService {

    public $arr_rows = [];

    public function readWelcomeController() {
        $arq = fopen("./Template/App/Controller/WelcomeController.php", "r");
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