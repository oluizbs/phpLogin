<?php

    function verifica($path){
        if(!$_SESSION['id']){
            header('location:'.$path);
            exit;
        }
    }

?>