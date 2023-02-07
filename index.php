<?php
    $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
        echo"Bem Vindo, $login_cookie<br>";
        echo"As informações <font color='red'>PODEM</font> ser acessadas.";
    }
    else{
        echo"Bem vindo, condidado <br>";
        echo"As informações <font color='red'>NÃO PODEM</font> ser acessadas.";
        echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>