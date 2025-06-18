<?php

class HomeController extends Controller {
    public function index() {
        $this->view('home/index');
    }
}

    /*Este é o controller principal da sua aplicação, e ele é fundamental para a sua página inicial. 
    Assim como os outros que vimos, ele tem um método index() que chama $this->view('home/index');. 
    Isso indica que sua página inicial deve estar no arquivo app/views/home/index.php.*/

?>