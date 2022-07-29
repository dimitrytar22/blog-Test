<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title><?= $title ?></title>
</head>
<body>
<nav>
    <div>
        <span><h3><a href="/">Dimitrytar</a></h3></span>
        <ul>
            <li><a href="/">Main page</a></li>
            <li><a href="/about.php">About us</a></li>
            <li><a href="/reviews.php">Reviews</a></li>
            <li><a href="/contacts.php">Contacts</a></li>
            <?php
                if(isset($_SESSION['id_user']) && isset($_SESSION['username'])){
                    echo "<li><a href=\"/user/profile.php\">Profile</a></li>";
                    echo "<li><a href=\"/user/dashboard.php\">Dashboard</a></li>";
                    if(isset($_SESSION['admin']) && $_SESSION['admin'] === 1){
                        echo "<li><a href=\"/admin/adminpanel.php\">Admin panel</a></li>";
                    }
                    echo "<li><a href=\"/user/logout.php\">Log out</a></li>";
                }else{
                    echo "<li><a href=\"/guest/register.php\">Register</a></li>";
                    echo "<li><a href=\"/guest/login.php\">Login</a></li>";
                }

            ?>
        </ul>
    </div>
</nav>