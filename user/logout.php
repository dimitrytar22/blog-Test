<?php
    if($_SERVER['HTTP_REFERER'] != ""){
        session_start();
        session_destroy();
        header("Location: /");
    }
?>