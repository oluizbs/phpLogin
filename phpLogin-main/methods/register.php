<?php
    require_once("conn.php");

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    //echo "$nome_usuario - $email_usuario";
    
    $sql = "INSERT INTO users(name, mail, password) VALUES (:name, :mail,:password)";

    $stmt = $conn->prepare($sql);
    

    $params = array(
        ':name' => $name, 
        ':mail' => $mail, 
        ':password' => $password,
    );

    $stmt->execute($params);

    echo "<script>
          alert('Cadastrado realizado com sucesso!');
      </script>
      <meta http-equiv='refresh' content='0, url=../pages/login.page.php'>
    ";



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