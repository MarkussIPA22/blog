<?php

echo "ddd";


$url = parse_url ($_SERVER["REQUEST_URI"])["path"];

if($url == "/") {
    require "controllers/index.php";
}
if($url == "/About") {
    require "controllers/About.php";
}
if($url == "/story") {
    require "controllers/story.php";
}

?>

