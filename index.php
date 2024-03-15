<?php

$data = [
    "name" => "Filipis",
    "age" => 69,
    "height" => 175,
];
// echo $data ["age"];

$data2 = [
    "name" => "Harijs",
    "height" => 181,
];

echo $data2 ["age"] ?? "nav vecuma";
if (isset($data2["age"])) {
    echo $data2["age"];
}

if (array_key_exists("age", $data2)){
    echo $data2["age"];
}


echo "ddd";







?>

