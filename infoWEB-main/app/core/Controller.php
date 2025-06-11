<?php

class Controller {
    public function view($view, $dados = []) {
        extract($dados);
        require_once __DIR__ . '/../views/' . $view . '.php';
    }


    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
}

/*Este arquivo é a classe base para todos os seus controladores*/

?>