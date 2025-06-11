<?php

require_once __DIR__ . '/../../DAO/quizDAO.php';
require_once __DIR__ . '/../../DAO/conexao.php';

class DesafioController extends Controller {
    public function index() {
        //Carrega perguntas do banco
        $pdo = Conexao::getConexao();
        $quizModel = new Quiz($pdo);
        $perguntas = $quizModel->buscarPerguntasQuiz(7);
      
        //Carrega a view com as perguntas
        $this->view('desafio/index', ['perguntas' => $perguntas]);
    }
}

/*Este controller é um pouco mais complexo que o anterior, pois ele lida com a lógica de buscar dados.
Ele está fazendo o seguinte: Inclusões, conexão e modelo, busca de dados, renderiza a view*/

?>