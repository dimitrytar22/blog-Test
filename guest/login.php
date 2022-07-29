<? 
    ob_start();
    $title = "Login";
    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    require_once("$root/blocks/header.php");
    require_once("validation/validate_login.php");
     ?>
    <h2>Login</h2>
    <div class="error-msg"><p><?= $error_msg ?></p></div>
    <div id="reg-form">
        <form action="login.php"  method="post">
            Username:<input type="text" name="username" minlength="3" maxlength="20" value="<?= $username ?>" required><br>
            Password: <input type="password" name="password" minlength="3" maxlength="32" required><br>
            <button class="btn btn-success" type="submit" name="login" value="login">Login</button>
        </form>
    </div>

<? require_once("$root./blocks/footer.html"); ?>