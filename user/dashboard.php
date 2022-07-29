<?php
session_start();
    $username = $_SESSION['username'];
    $id_user = $_SESSION['id_user'];
    $root = realpath($_SERVER['DOCUMENT_ROOT']);

    $title = "User dashboard";
    require_once("$root/blocks/header.php");

    echo "<span class='user-data'>
        <p><b>$username</b> [id: $id_user]</p>
        </span>";
    echo "<span>
        <p>Hello, <b>$username</b></p>
        </span>";

    require_once("$root/blocks/footer.html");

?>