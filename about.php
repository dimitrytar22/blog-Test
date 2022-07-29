<?php
session_start();
        $title = "About us";
        $root = realpath($_SERVER['DOCUMENT_ROOT']);
        require_once("$root/blocks/header.php")  
    ?>


    <div>
        <div><b>About us</b></div>
    </div>

    <?
        require_once("$root/blocks/footer.html");
    ?>

</body>
</html>