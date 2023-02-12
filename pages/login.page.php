<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Login</title>
  </head>
  <body>

    <div class="card">

      <div class="card-img">
        <!-- <img width="150px" src="../img/mario_login.png" alt=""> -->
      </div>

      <div class="card-body">
        <h4>- LOGIN</h4>
        <form action="../methods/login.php" method="post">
            <input class="input-form" type="email" name="email" placeholder="Email">
            <input class="input-form" type="password" name="password" placeholder="Senha">

            <button class="btn" type="submit">Entrar</button>
        </form>
      </div>

      <div class="card-footer">
        <small>Ainda não possui uma conta?</small>
        <a href="register.page.php">Criar nova conta</a>
      </div>
    </div>

   </body>
</html>