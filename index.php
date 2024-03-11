<?php

require "functions.php";
 $config = require "config.php";
require "Database.php";


echo "Hi, IPa22 👋";

 $db = new Database($config);

 $query_string= "SELECT * FROM posts";
 $params= [];

 if(isset($_GET["id"]) && $_GET["id"] != "") {
     //panem ipeirkšējo  vērtību un pieliek Where klat
$query_string .= " WHERE id=:id";
$params =[":id" => $_GET["id"]];
 }
 $posts = $db->execute($query_string ,$params);
 


 $query_string1 = "SELECT * FROM posts";
 $params2 = [];
  

 if(isset($_GET["categories"]) && $_GET["categories"] != "") {
    $query_string1 .= " WHERE categories=:categories";
$params2 =[":categories" => $_GET["categories"]];
 }
 $categories = $db->execute($query_string1 ,$params2);
    
 

//  echo $_GET["id"];

echo "<form >";
 echo "<input name='id'  />";
 echo"<button> Filter by ID</button>";
echo "</form>";


echo "<form >";
 echo "<input name='categories'  />";
 echo"<button> Filter by Categories</button>";
echo "</form>";

echo "<h1>Posts</h1>";

echo "<ol>";
foreach($posts as $post) {
    echo "<li>" .$post ["title"] . "</li>";
}
echo "</ol>";