<?php

    $host = "localhost";
    $db = "site";
    $user = "root";
    $pass = "";

    $connection = new mysqli($host, $user, $pass, $db);

    if($connection->connect_error){
        die("Connection error");
    }

    function is_user_exist($username, $email){
        global $connection;

        $query = "SELECT count(id_user) AS 'count' FROM `users` WHERE `username`='$username' OR `email`='$email'";
        $result = $connection->query($query)->fetch_assoc();
        if((int)$result['count'] > 0){
            $connection->close();
            return true;
        }
        return false;
    }

    function add_user($username, $password, $email){
        global $connection;

        $password = md5($password);
        $query = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')";
        $connection->query($query);
        
        if($connection->connect_error) 
            return false;
        else
            return true;
    }

    function delete_user($id_user){
        global $connection;

        $query = "DELETE FROM `users` WHERE id_user='$id_user'";
        $connection->query($query);
        
        if($connection->connect_error) 
            return false;
        else
            return true;
    }

    function search_user($username, $password){
        global $connection;

        $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = $connection->query($query);

        if($result->num_rows <= 0){
            return false;
        }else{
            return $result->fetch_assoc();
        }
    }

    function is_admin($username){
        global $connection;

        $query = "SELECT `admin` FROM `users` WHERE username='$username'";
        $result = $connection->query($query);
        
        if((int)$result->fetch_assoc()['admin'] === 1){
            return true;
        }else{
            return false;
        }


    }

    function delete_article($id){
        global $connection;

        $query = "DELETE FROM `articles` WHERE id='$id'";
        $connection->query($query);

        if($connection->connect_error) 
            return false;
        else
            return true;

    }

    function update_article($id, $title, $text){
        global $connection;

        $query = "UPDATE `articles` SET title='$title', `text`='$text' WHERE id='$id'";
        $connection->query($query);

        if($connection->connect_error)
            return false;
        else
            return true;
    }


    function add_article($title, $text){
        global $connection;

        $query = "INSERT INTO `articles` (`title`, `text`) VALUES ('$title','$text')";
        $connection->query($query);

        if($connection->connect_error)
            return false;
        else
            return true;

    }

    function get_article_by_id($id){
        global $connection;

        $query = "SELECT title, text FROM `articles` WHERE id='$id'";
        $result = $connection->query($query);

        
        if($connection->connect_error)
            return false;
        else
            return $result->fetch_assoc();

    }

    function get_all_users(){
        global $connection;

        $query = "SELECT * FROM `users`";
        $result = $connection->query($query);

        if($connection->connect_error)
            return false;
        else
            return $result;

    }

?>