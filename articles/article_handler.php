<?php
    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    require_once("$root/connection/connection.php");

    $table = "articles";

    function get_all_articles(){
        global $connection, $table;

        $query = "SELECT * FROM `$table`";
        $result = $connection->query($query);
        if($result->connect_error) die("sql error!");
        $result->fetch_assoc();

        foreach($result as $row){
            $id = $row['id'];
            $title = $row['title'];
            $text = $row['text'];
            $date = $row['date'];

            if(mb_strlen($text) >= 600){
                $text = mb_substr($text, 0, 600) . "<span style=\"cursor:pointer; text-decoration:underline; color:blue;\">...(next)<span>";
            }

            require("article.php");
        }
    }


?>