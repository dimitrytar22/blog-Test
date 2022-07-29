<?php
session_start();
    if($_SESSION['admin'] === 0 || !isset($_SESSION['admin'])) header("Location: /");
    $root = realpath($_SERVER['DOCUMENT_ROOT']);

    $title = "Articles";
    require_once("$root/blocks/header.php");
?>
    <h1>Articles</h1>

    <div class="add-article"><button><a href="/admin/actions/addarticle.php">Add article</a></button></div>
    <div class="articles">

    <?php require_once("$root/articles/article_handler.php"); 
    get_all_articles(); ?>
    
    </div>


<?php
    require_once("$root/blocks/footer.html");


?>