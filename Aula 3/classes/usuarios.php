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
            return true;
        } catch (PDOExeption $e) {
            return false;
        }
    
    }
    public function logar($email, $senha){
        global $pdo;
    
        //verificar se o email e senha estão cadastrados, se sim
        $sql = $pdo->prepare("SELECT id FROM administradores WHERE email= :e AND senha= :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
    
        if ($sql->rowCount() > 0)
        {
            //entrar no sistema(sesão)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id'];
           
            return true; // Logado com Sucesso
        }else{
    
            return false; // Não foi possivel Logar
    
        }
}
}

?>