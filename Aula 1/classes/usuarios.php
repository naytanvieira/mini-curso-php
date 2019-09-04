<?php

class Usuario {
    private $pdo;
    public $msgErro="";

    #Essa é a função que conecta o Site ao Banco de Dados, assim Permitindo com que as outras funções funcionem
    public function conectar(){
        global $pdo;
        global $msgErro;
        $nome = "projeto";
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        try {
            //code...
            $pdo = new PDO("mysql:dbname=".$nome.";charset=utf8;host=".$host,$usuario,$senha);
            
        } catch (PDOExeption $e) {
            $msgErro = $e->getMessage();
        }
    
    }
}

?>