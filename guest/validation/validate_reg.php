<?php
$root = realpath($_SERVER['DOCUMENT_ROOT']);
if(isset($_POST['reg'])){
    require_once("$root/connection/connection.php");

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    
    
    if($username === '' || $password === '' || $email === ''){
        $error_msg = 'Fill all the required fields!';
    }
    else if(mb_strlen($username, "UTF8") < 3){
        $error_msg = 'Minimal username length 3 symbols!';
    }
    else if(mb_strlen($password, "UTF8") < 8){
        $error_msg = 'Minimal password length 8 symbols!';
    }else if(is_user_exist($username, $email)){
        $error_msg = 'Username or Email is already exist!';
    }else{
        
        if(!add_user($username, $password, $email)){
            $connection->close();
            die('Registration error');
        }
        $connection->close();
        exit("<div class=\"text-success\" style=\"text-align:center;\"\"><h1>Registration successful!<br><a href='login.php'>Login</a></h1></div>");
    }
    
}else{
    $error_msg = '';
}

?>