<?php

namespace App\Controller;

abstract class Controller {

    /*
     * Este metodo render, é responsável por exibir suas views, basta chamar-lo 
     * utilizando [parent::render($view, $model);]. E passar seus respectivos
     * parâmetros, sendo o primeiro a view, e o segundo a model caso existir.
    */
    protected static function render($view, $model = null) {
        $arquivo = "./View/modules/$view.php";

        if(file_exists($arquivo))
            include  $arquivo;
        else
            echo "arquivo não encontrado. Caminho: " . $arquivo;
    }

    /*
     * Este metodo é responsável por verificar se o usuário
     * está logado. Você poderá utilizar-la em páginas que deseja proteger. Chame está função
     * em sua Controller utilizando [parent::isAuthenticated();].
     */
    //protected static function isAuthenticated() {
    //if(!isset($_SESSION['insira_o_nome_da_sua_session_aqui']))
    //    header("Location: /login");
    //}
}