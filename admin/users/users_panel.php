<?php
session_start();

    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    if(!isset($_SESSION['admin']) || $_SESSION['admin'] === 0) header("Location: /");

    $title = "Admin panel of $_SESSION[username]";
    require_once("$root/blocks/header.php");
?>


    <h1>Users panel</h1>
</div>
<div class="users">
    <?php
            require_once("$root/connection/connection.php");
            
            $users = get_all_users();
            
            foreach($users as $row){
                $id_user = $row['id_user'];
                $username = $row['username'];
                $password = $row['password'];
                $email = $row['email'];
                $admin = $row['admin'];
                if($admin == 1){
                    $admin = "Yes";
                }else{
                    $admin = "No";
                }
                require("$root/blocks/users/user.php"); 
            }
        ?>
    </div>

<?php
    require_once("$root/blocks/footer.html");
?>