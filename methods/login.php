<?php

    require_once('conn.php');
    require_once('verification.php');

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $pass = md5($_POST['pass']);
    
    $sql = "SELECT * FROM users WHERE `email` =: $email AND `pass` =: $pass";
    $result = $conn->prepare($sql);
    $result->execute(["email" === $email, "pass" === $pass]);
    $user = $result->fetch();

    if(!empty($users)) {
        session_start();
        $_SESSION["id"] = $users["id"];
        $_SESSION["user_name"] = $users["user_name"];
        $_SESSION["email"] = $users["email"];
        header('location:../');
    }else{
        echo "<script> alert('Usuário não encontrado!');</script>
      <meta http-equiv='refresh' content='0, url=../pages/login.page.php'>
    ";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Funcionou!?</h2>
</body>
</html>