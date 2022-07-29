<?php
session_start();
ob_start();

    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    $my_id = $_SESSION['id_user'];
    $id_user = $_POST['id_user'];
    if($_SESSION['admin'] === 0) header("Location: /");
    if( !isset($_POST['delete']) && !isset($_POST['id_user']) ) {
        header("Location: /admin/users/users_panel.php");
        exit;
    }
    if($id_user == $my_id) {
        header("Location: /admin/users/users_panel.php");
        exit;
    }

    require_once("$root/connection/connection.php");
    if(!delete_user($id_user)){
        exit("<div class=\"text-danger\" style=\"text-align:center;\"\"><h1>Failed to delete user!<br><a href='login.php'>Login</a></h1></div>");
    }

    $msg = "User was deleted";
    echo "<div class=\"text-success\">$msg</div>";
    header("Location: /admin/users/users_panel.php");

?>