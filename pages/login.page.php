<?php
  include_once('../methods/conn.php');
  
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6681/6681204.png">
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Login</title>
  </head>
  <body>

    <div class="card">

      <div class="card-img">
        <img width="150px" src="#" alt="">
      </div>

      <div class="card-body">
        <h4>LOGIN</h4>
        <form action="../methods/login.php" method="POST">
            <input class="input-form" type="email" name="email" placeholder="Email"><br>
            <input class="input-form" type="password" name="pass" placeholder="Password"><br>

            <button class="btn" type="submit">Sign in</button>
        </form>
      </div>

      <div class="card-footer">
        <small>Don't have an account yet?</small>
        <a href="register.page.php">Create new account</a>
      </div>
    </div>

   </body>
</html>