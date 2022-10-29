<?php

namespace App\Services;

class ReadDaoService {

    public $arr_rows = [];

    public function readDAO() {
        $arq = fopen("./Template/DAO/DAO.php", "r");
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