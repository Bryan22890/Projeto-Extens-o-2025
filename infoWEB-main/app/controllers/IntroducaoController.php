<?php

class IntroducaoController extends Controller {
    public function index() {
        $this->view('introducao/index');
    }
}

/*É o mesmo padrão: um método index() que carrega a view introducao/index.*/

?>