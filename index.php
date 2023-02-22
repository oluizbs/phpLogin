<?php 
  
  session_start();

  require_once('../methods/verification.php');

  verification('../pages/login.page.php');

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Painel Privado</title>
  </head>
  <body>


    <div class="card">

        <div class="card-img">
            <img width="150px" src="#" alt="">
        </div>

        <div class="card-body">
            <h4>- PAINEL PRIVADO</h4>

            <p>Olá, Nome do Usuário</p>

            <a href="methods/logout.php">
                <button class="btn">Sair</button>
            </a>
        </div>
    </div>
  
  </body>
</html>