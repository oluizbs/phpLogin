<?php
      if(isset($_POST['submit'])){
        require_once('conn.php');
        
      $name = $_POST['nome'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $result = mysqli_query($conn, "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Register</title>
</head>
<body>
    <div class="back">

      <div class="card">
        
  <div class="card-img">
    <img width="150px" src="https://media.tenor.com/aA4PwnyhoWMAAAAC/space-astronaut.gif" alt="">
  </div>

  <div class="card-body">
    <h4> REGISTER</h4>

      <form action="../methods/register.php" method="POST">
          <input class="input-form" type="text" name="nome" placeholder="Name"><br>
          <input class="input-form" type="email" name="email" placeholder="Email"><br>

          <input class="input-form" type="password" name="password" placeholder="Password"><br>

          <button class="btn" type="submit" name="submit">Register</button>
      </form>
    </div>
    
    <div class="card-footer">
      <small>Already have an account?</small>
      <a class="link_acess" href="login.page.php">Access</a>
    </div>
  </div>
</div>

</body>
</html>