<?php
  
  require_once './classes/usuarios.php';

  $u = new Usuario;

?>
<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Estilo Proprio -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Semana SIPAC</title>
  </head>
  <body>
        <div class="container-fluid">
            <div class="login">
                <div class="form-login">
                    <form method="POST">
                        <h4>Email:</h4>
                        <input type="email" class="form-control" name="email">
                        <h4>Senha</h4>
                        <input type="password" class="form-control" name="senha">
                        <button class="btn btn-success" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    <?php

    if (isset($_POST['email'])) {
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      if (!empty($email) && !empty($senha)){
        
        if ($u->conectar()) {
          if ($u->logar($email,$senha)) {
            header("location:index.php");
          } else {
            //email ou senha incorretos
          }
        } else {
          //erro ao se conectar com o banco de dados
        }
      } else {
        //campo vazio
      }
    }

    ?>
    
  </body>
</html>