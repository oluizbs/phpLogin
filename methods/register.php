<?php
    require_once("conn.php");
    
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //echo "$nome_usuario - $email_usuario";

    $sql = "INSERT INTO users(user_name, email, pass) VALUES (:user_name, :email,:pass)";

    $stmt = $conn->prepare($sql);
    

    $params = array(
        ':user_name' => $user_name, 
        ':email' => $email, 
        ':pass' => $pass
    );

    $stmt->execute($params);

    echo "<script>
          alert('Cadastrado realizado com sucesso! Realize agora o login');
          <meta http-equiv='refresh' content='0, url=../pages/login.page.php'>
      </script>";



    // $resultado_usuario = mysql_query($conn, $result_usuario);
    
    // if(mysql_affected_rows($conn) != 0){
    //             echo "
    //                 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=#'>
    //                 <script type='text/javascript'>
    //                     alert('Usuario cadastrado com Sucesso.');
    //                 </script>
    //             ";    
    //         }else{
    //             echo "
    //                 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=#'>
    //                 <script type='text/javascript'>
    //                     alert('O Usuario não foi cadastrado com Sucesso.');
    //                 </script>
    //             ";    
    //         }
?>

<!-- // ( ͡~ ͜ʖ ͡°) -->