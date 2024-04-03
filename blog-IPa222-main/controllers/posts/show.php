<?php

require "Database.php";
$config = require ("config.php");

$db = new Database($config);


    $query = "SELECT * FROM posts where id = :id";
    $params= [":id" =>$_GET["id"]];
   $_POST = $db->execute($query, $params)->fetch();



require "views/posts/show.view.php"; 
?>
    
    
