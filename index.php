<?php
session_start();
    $root = realpath($_SERVER['DOCUMENT_ROOT']);

    $title = "Main page";
    require_once("$root/blocks/header.php");
    require_once("$root/articles/article_handler.php");
    $title = "title";
    $text = "textttttddddddddddddddddddddddddddddddddddddddddddddddddttttttt";
    $date = "26.07.22";
    ?>

    <div>
        <div><b>Main page</b></div>
    </div>
    
    <?
        echo "<div class=articles>";
        get_all_articles();
        echo "</div>";
        require_once("$root/blocks/footer.html");
    ?>

</body>
</html>