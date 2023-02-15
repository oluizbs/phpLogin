<?php

    require_once('conn.php');
    require_once('verification.php');

    $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
    $password = md5($_POST['password']);

    // $sql = "SELECT * FROM `users` WHERE `$mail` = '$mail' AND `$password`= '$password'";
    $sql = "SELECT * FROM users WHERE mail=:mail and `password` =:`password`";
    $resultado = $conn->prepare($sql);
    $resultado->execute(['mail' => $mail, 'password' => $password]);
    $rows = $resultado->fetch();

    if(!empty($users)) {
        session_start();
        $_SESSION['id'] = $users['id'];
        $_SESSION['name'] = $users['name'];
        $_SESSION['mail'] = $users['mail'];
        header('location:../');
    }else{
        echo "<script> alert('Usuário não encontrado!');</script>
      <meta http-equiv='refresh' content='0, url=../pages/login.page.php'>
    ";
          
}

?>