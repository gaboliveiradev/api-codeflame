<?php

use App\Controller\{
    AutoloadController
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    // http://localhost:8000/api/index
    case "/api/index":
        
    break;

    // http://localhost:8000/api/config
    case "/api/config":
    
    break;

    // http://localhost:8000/api/rotas
    case "/api/rotas":

    break;

    // http://localhost:8000/api/autoload
    case "/api/autoload":
        AutoloadController::returnRows();
    break;
}