<?php

function myAutoload($class) {
    if(file_exists("./Controller/$class.php")) 
        include "./Controller/$class.php";
}

spl_autoload_register("myAutoload");