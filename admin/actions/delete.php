<?
    if(!isset($_POST['id']) || !$_POST['id'] || $_SERVER['HTTP_REFERER'] !== "http://localhost/admin/adminpanel.php"){
        header("Location: / ");
    }

    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    require_once("$root/connection/connection.php");

    delete_article($_POST['id']);

    header("Location: $_SERVER[HTTP_REFERER]");

?>