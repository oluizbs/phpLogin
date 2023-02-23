<?php

    require_once('conn.php');
    // require_once("verification.php");

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    $pass = md5($_POST['pass']);

    // $sql = 'SELECT * FROM users WHERE email =: $email AND pass =: $pass';

    $result = $conn->prepare('SELECT * FROM users WHERE email =: $email AND pass =: $pass');

    $result->execute(array('email' => $email, 'pass' => $pass));

    $result->execute(array(':email' => $email, ':pass' => $pass));

    $user = $result->fetch();

    if(!empty($user)) {
        session_start();
        $_SESSION["id"] = $user["id"];
        $_SESSION["user_name"] = $user["user_name"];
        $_SESSION["email"] = $user["email"];
        header('location:../');
    }else{
        echo "<script> alert('Usuário não encontrado!');</script>
      <meta http-equiv='refresh' content='0, url=../pages/login.page.php'>
    ";
    };

?>
