<?php

    require_once('conn.php');

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = md5($_POST['password']);

    $sql = 'SELECT * FROM users WHERE email=:email and password =:password';
    $resultado = $conn->prepare($sql);
    $resultado->execute(['email' => $email, 'password' => $password]);
    $rows = $resultado->fetch();

    if(!empty($user)) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        header('location:../');
    }else{
        echo 'Usuário não encontrado';
    }

?>