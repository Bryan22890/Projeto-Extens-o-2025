<?php

class ComunicacaoController extends Controller {
    public function index() {
        $this->view('comunicacao/index');
    }
}

    /*Este controller é bem direto. Ele tem apenas um método index() que chama $this->view('comunicacao/index');. 
    Isso significa que quando a rota para ComunicacaoController for acessada, ele vai tentar carregar uma view 
    que provavelmente está em app/views/comunicacao/index.php.*/
?>