    <? 
    $title = "Register";
    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    require_once("$root/blocks/header.php"); 
    require_once("$root/guest/validation/validate_reg.php");
    
    ?>
    <h2>Registration</h2>
    <div class="error-msg"><p><?= $error_msg ?></p></div>
    <div id="reg-form">
        <form action="register.php" method="post">
            Username:<input type="text" name="username" minlength="3" maxlength="20" value="<?= $username ?>" required><br>
            Password: <input type="password" name="password" minlength="8" maxlength="32" required><br>
            Email: <input type="email" name="email" value="<?= $email ?>" required><br>
            <button class="btn btn-success" type="submit" name="reg" value="reg">Register</button>
        </form>
    </div>

<? require_once("$root/blocks/footer.html"); ?>