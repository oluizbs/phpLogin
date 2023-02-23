<?php
      if(isset($_POST['submit'])){
      require_once('conn.php');
        
      $user_name = $_POST['user_name'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];

      $result = mysqli_query($conn, "INSERT INTO users(user_name, email, pass) VALUES (:user_name, :email, :pass)");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6681/6681204.png">
  <title>Register</title>
</head>
<body>
    <div class="back">

      <div class="card">
        
  <div class="card-img">
    <img width="150px" src="https://media.tenor.com/at27bgtYrKsAAAAi/purple-bat.gif" alt="">
  </div>

  <div class="card-body">
    <h4>
      Register
    </h4>

      <form action="../methods/register.php" method="POST">
        
          <input class="input-form" type="text" name="user_name" placeholder="Name"><br>

          <input class="input-form" type="email" name="email" placeholder="Email"><br>

          <input class="input-form" type="password" name="pass" placeholder="Password"><br>

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

<!-- 
───▄▀▀▀▄▄▄▄▄▄▄▀▀▀▄───
───█▒▒░░░░░░░░░▒▒█───
────█░░█░░░░░█░░█────
─▄▄──█░░░▀█▀░░░█──▄▄─
█░░█─▀▄░░░░░░░▄▀─█░░█ -->
