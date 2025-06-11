<?php

class Conexao{
    private static $instancia;

    private function __construct(){}
        
    public static function getConexao() {
        if (!isset(self::$instancia)) {
            $dbname = "infoweb";
            $host = "localhost";
            $user = "root";
            $senha = "";

            try {
                self::$instancia = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha);
            } catch (Exception $e) {
                echo 'O Erro é: ' . $e;
            }
        }
        return self::$instancia;
    }
}

/*Este arquivo define uma classe Conexao que implementa o padrão Singleton para gerenciar 
a conexão com o banco de dados. Isso significa que ele garante que haja apenas uma instância 
da conexão com o banco de dados em toda a sua aplicação, o que é uma boa prática para evitar 
sobrecarga e garantir a consistência.*/

?>