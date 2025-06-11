<?php

class SobreController extends Controller {
    public function index() {
        $this->view('sobre/index');
    }
}

    /*Ele tem um método index() que renderiza a view sobre/index. Isso significa que ele espera 
    encontrar o arquivo de view em app/views/sobre/index.php.*/

?>