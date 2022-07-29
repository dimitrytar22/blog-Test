<?php
session_start();
    $title = "Reviews";
    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    require_once("$root/blocks/header.php");

?>

<div>
        <div><b>Reviews</b></div>
    </div>

    <?
        require_once("$root/blocks/footer.html");
    ?>

</body>
</html>