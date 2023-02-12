<?php
    require_once("conn.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //echo "$nome_usuario - $email_usuario";
    
    $sql = "INSERT INTO users(nome, email, password) VALUES (:nome, :email,:password)";

    $stmt = $conn->prepare($sql);

    $params = array(
        ':nome' => $nome, 
        ':email' => $email, 
        ':password' => $password,
    );

    $stmt->execute($params);

    echo "<script>
          alert('Funcionário cadastrado com sucesso.');
      </script>
      <meta http-equiv='refresh' content='0, url=funcionarios.php'>
    ";



    // $resultado_usuario = mysql_query($conn, $result_usuario);
    
    // if(mysql_affected_rows($conn) != 0){
    //             echo "
    //                 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
    //                 <script type='text/javascript'>
    //                     alert('Usuario cadastrado com Sucesso.');
    //                 </script>
    //             ";    
    //         }else{
    //             echo "
    //                 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
    //                 <script type='text/javascript'>
    //                     alert('O Usuario não foi cadastrado com Sucesso.');
    //                 </script>
    //             ";    
    //         }
?>

 