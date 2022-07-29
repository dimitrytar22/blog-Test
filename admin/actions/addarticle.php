<?php
session_start();
ob_start();
    $root = realpath($_SERVER['DOCUMENT_ROOT']);


    if($_SESSION['admin'] !== 1) {
        header("Location: /");
        exit();
    }
    $title = "Article creator";
    require_once("$root/blocks/header.php");
    if(isset($_POST['add']) && $_SESSION['admin'] === 1){
        require_once("$root/connection/connection.php");

        $title = $_POST['title'];
        $text = $_POST['text'];

        add_article($title, $text);
        exit("<div class=\"text-success\" style=\"text-align:center;\"\"><h1>Article was successfully added!<br><a href='/admin/articles/articles.php'>Back to articles</a></h1></div>");
    }else if(isset($_POST['cancel'])){
        //("Location: /admin/articles/articles.php");
        header("Location: /blocks");
    }

    

    


    

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

    <div><h2 class="article-add-label">Article Creator</h2></div>

    <div class="add-form">
        <form action="#" method="post">
            <div><span class="add-title">Title: </span><input type="text" name="title" size="40" value=""></div>
            <div><span class="add-text">Text: </span><textarea name="text" cols="100" rows="14" maxlength="65000"></textarea><span class="symbol-count"></span></div>
            <div><button type="submit" name="add">Add</button><button type="submit" name="cancel">Cancel</button></div>
        </form>
    </div>