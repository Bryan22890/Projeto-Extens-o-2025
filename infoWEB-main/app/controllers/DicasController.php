<?php

class DicasController extends Controller {
    public function index() {
        $this->view('dicas/index');
    }
}

    /*Similar ao ComunicacaoController, este é um controller bem simples. Ele possui apenas um método 
    index() que renderiza a view dicas/index. Isso significa que ele espera encontrar o arquivo 
    de view em app/views/dicas/index.php.*/

?>