<?php
session_start();
if(!isset($_SESSION['id_usuario']))
{
    header("location: login.php");
    exit;
}else{

    require_once 'classes/usuarios.php';
    $u = new Usuario;
}

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/admin.css">

    <title>Semana SIPAC</title>
  </head>
  <body>
    <div class="menu">
      <h4>Semana SIPAC</h4>
    </div>
    <div class="sidemenu">
      <ul>
        <a href="index.php"><li>Pagina Inicial</li></a>
        <a href="palestras.php"><li>Palestras</li></a>
        <a href="sair.php"><li>Sair</li></a>
      </ul>
    </div>
    <div class="container-fluid">
        <div class="principal">
            <h4 class="title">Palestras</h4>
            <p class="texto">Aqui você conseguira visualizar todas as palestras cadastradas juntamente com o dia 
                e cadastrar novas palestras.
            </p>
            <a href="cadastrar-palestra.php" class="btn-centraliza btn btn-success">Cadastrar Palestra</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
