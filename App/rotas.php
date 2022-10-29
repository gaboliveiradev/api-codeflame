<?php

use App\Controller\{
    AutoloadController,
    ConfigController,
    ControllerController,
    DaoController,
    IndexController,
    ModelController,
    ReadBootstrapController,
    RotasController,
    WelcomeControllerController
};
use App\Services\ReadControllerService;

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    // http://localhost:8000/api/index
    case "/api/index":
        IndexController::returnRows();
    break;

    // http://localhost:8000/api/config
    case "/api/config":
        ConfigController::returnRows();
    break;

    // http://localhost:8000/api/rotas
    case "/api/rotas":
        RotasController::returnRows();
    break;

    // http://localhost:8000/api/autoload
    case "/api/autoload":
        AutoloadController::returnRows();
    break;

    // http://localhost:8000/api/dao
    case "/api/dao":
        DaoController::returnRows();
    break;

    // http://localhost:8000/api/controller
    case "/api/controller":
        ControllerController::returnRows();
    break;

    // http://localhost:8000/api/welcome-controller
    case "/api/welcome-controller":
        WelcomeControllerController::returnRows();
    break;

    // http://localhost:8000/api/model
    case "/api/model":
        ModelController::returnRows();
    break;

    // http://localhost:8000/api/bootstrap-css
    case "/api/bootstrap-css":
        ReadBootstrapController::returnRowsCss();
    break;

    // http://localhost:8000/api/bootstrap-js
    case "/api/bootstrap-js":
        ReadBootstrapController::returnRowsJs();
    break;
}