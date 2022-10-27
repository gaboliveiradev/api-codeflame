<?php
namespace App\Controller;

abstract class Controller {
    protected static function render($view, $model = null) {
        $arquivo = "./View/modules/$view.php";

        if(file_exists($arquivo))
            include  $arquivo;
        else
            echo "arquivo não encontrado. Caminho: " . $arquivo;
    }

    /*
     * Está função é responsável por verificar se o usuário
     * está logado. Você poderá utilizar-la em páginas que deseja proteger. Chame está função
     * em sua Controller utilizando [parent::isAuthenticated();].
     */
    //protected static function isAuthenticated() {
    //if(!isset($_SESSION['insira_o_nome_da_sua_session_aqui']))
    //    header("Location: /login");
    //}
}