<?php

    function verification($path){
        if(!$_SESSION['id']){
            header('location:'.$path);
            exit;
        }
    }

?>