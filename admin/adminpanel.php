<?php
session_start();

    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    if(!isset($_SESSION['admin']) || $_SESSION['admin'] === 0) header("Location: /");

    $title = "Admin panel of $_SESSION[username]";
    $username = $_SESSION['username'];
    require_once("$root/blocks/header.php");


?>
    <h1>Admin panel</h1>

    <h2>You are welcome, <?= $username ?></h2>
    <div class="panel">
        <button><a href="/admin/articles/articles.php">Articles</a></button>
        <button><a href="/admin/users/users_panel.php">Users</a></button>
    </div>
<?

    require_once("$root/blocks/footer.html");
?>