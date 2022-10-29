<?php

use App\Controller\{
    AutoloadController,
    ConfigController,
    ControllerController,
    DaoController,
    IncludeController,
    IndexController,
    ModelController,
    ReadBootstrapController,
    ReadFileController,
    RotasController,
    ViewWelcomeController,
    WelcomeControllerController
};
use App\Services\ReadControllerService;

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    // http://localhost:8000/api/index
    case "/api/index":
        ReadFileController::returnRows("./Template/App/index.php");
    break;

    // http://localhost:8000/api/config
    case "/api/config":
        ReadFileController::returnRows("./Template/App/config.php");
    break;

    // http://localhost:8000/api/rotas
    case "/api/rotas":
        ReadFileController::returnRows("./Template/App/rotas.php");
    break;

    // http://localhost:8000/api/autoload
    case "/api/autoload":
        ReadFileController::returnRows("./Template/App/autoload.php");
    break;

    // http://localhost:8000/api/dao
    case "/api/dao":
        ReadFileController::returnRows("./Template/App/DAO/DAO.php");
    break;

    // http://localhost:8000/api/controller
    case "/api/controller":
        ReadFileController::returnRows("./Template/App/Controller/Controller.php");
    break;

    // http://localhost:8000/api/welcome-controller
    case "/api/welcome-controller":
        ReadFileController::returnRows("./Template/App/Controller/WelcomeController.php");
    break;

    // http://localhost:8000/api/model
    case "/api/model":
        ReadFileController::returnRows("./Template/App/Model/Model.php");
    break;

    // http://localhost:8000/api/bootstrap-css
    case "/api/bootstrap-css":
        ReadFileController::returnRows("./Template/App/View/bootstrap/css/bootstrap.min.css.map");
    break;

    // http://localhost:8000/api/bootstrap-js
    case "/api/bootstrap-js":
        ReadFileController::returnRows("./Template/App/View/bootstrap/js/bootstrap.bundle.min.js");
    break;

    // http://localhost:8000/api/css-config
    case "/api/css-config":
        ReadFileController::returnRows("./Template/App/View/includes/css_config.php");
    break;

    // http://localhost:8000/api/js-config
    case "/api/js-config":
        ReadFileController::returnRows("./Template/App/View/includes/js_config.php");
    break;

    // http://localhost:8000/api/view-welcome
    case "/api/view-welcome":
        ReadFileController::returnRows("./Template/App/View/modules/welcome/welcome.php");
    break;
    
}