<?php
session_start();
    $title = "Contacts";
    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    require_once("$root/blocks/header.php");

?>

<div>
        <div><b>Contacts</b></div>
    </div>

    <?
        require_once("$root/blocks/footer.html");
    ?>

</body>
</html>