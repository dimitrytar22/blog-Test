<?php
session_start();

    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    if(!isset($_GET['id'])) header("Location: /");
    if(isset($_POST['save'])){
        require_once("$root/connection/connection.php");
        update_article($_GET['id'], $_POST['title'], $_POST['text']);
        header("Location: /admin/articles/articles.php");
        //exit("<div class=\"text-success\" style=\"text-align:center;\"\"><h1>Article was successfully edited!<br><a href='/admin/adminpanel.php'>Back to Admin Panel</a></h1></div>");

    }else if(isset($_POST['cancel'])){
        header("Location: /admin/articles/articles.php");
    }

    $id = $_GET['id'];
    $title = "Edit article id:$id";
    require_once("$root/blocks/header.php");
    require_once("$root/connection/connection.php");

    $current_article = get_article_by_id($id);

    $title = $current_article['title'];
    $text = $current_article['text'];

    

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $(".symbol-count").text($("textarea").val().length);
        if($("textarea").val().length >= 65000){       
            $(".symbol-count").css("color","red");
        }

        $("textarea").on("input",function(){
            if($(this).val().length >= 65000){
                $(".symbol-count").text(65000);
                $(this).prop("maxlength", 65000);
                $(".symbol-count").css("color","red");
                return;
            }
            $(".symbol-count").text($(this).val().length);
            $(".symbol-count").css("color","black");
        });
    });
</script>
    <div><h2 class="article-editor-label">Article Editor</h2></div>

    <div class="edit-form">
        <form action="#" method="post">
            <div><span class="edit-title">Title: </span><input type="text" name="title" size="40" value="<?= $title ?>"><span class="id">ID: <?= $id ?></span></div>
            <div><span class="edit-text">Text: </span><textarea name="text" cols="100" rows="14" maxlength="65000"><?= $text ?></textarea><span class="symbol-count">f</span></div>
            <div><button type="submit" name="save">Save</button><button type="submit" name="cancel">Cancel</button></div>
        </form>
    </div>