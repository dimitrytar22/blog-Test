<?php
session_start();

    $username = $_SESSION['username'];
    $title = "$username's profile";
    $root = realpath($_SERVER['DOCUMENT_ROOT']);

    require_once("$root/blocks/header.php");

    ?>

    <div>
        <div><b>Profile</b></div>
    </div>

    <?
        require_once("$root/blocks/footer.html");
    ?>

</body>
</html>