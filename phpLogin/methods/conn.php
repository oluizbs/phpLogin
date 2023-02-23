<?php

$dbHost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'login2';

try {
    $conn = new PDO('mysql:host=localhost;dbname=login2', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>


<!-- (👍 ͡~ ͜ʖ ͡°)👍 -->