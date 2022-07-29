<?php
    $root = realpath($_SERVER['DOCUMENT_ROOT']);

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $error_msg = "";

        require_once("$root/connection/connection.php");

        $user = search_user($username, $password);

        if(!$user) {
            $error_msg = "Wrong username or password!";
        }else{
            session_start();
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['username'] = $user['username'];

            if(is_admin($username)) $_SESSION['admin'] = 1;
            

            header("Location: /user/dashboard.php");
            exit;
        }
    }

?>