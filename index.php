<?php
require_once("./utils/data.php");
require_once("./utils/format.php");

$topic = $_GET["topic"];
$format = $_GET["format"]; 

if($topic == "git provider") {
    $list = [$github, $gitlab, $bitbucket];
} else if($topic == "frameworks javascript"){
    $list = [$react, $angular];
} else {
    $list = [$github, $gitlab, $bitbucket, /*$react,*/ $angular];
}

if(
    isset($_POST["name"]) && 
    isset($_POST["title"]) && 
    isset($_POST["link"]) && 
    isset($_POST["text"]) && 
    isset($_POST["url"])
) {
    $inbox = (object) [
        "name" => $_POST["name"],
        "title" => $_POST["title"],
        'link' => $_POST["link"],
        'text' => $_POST["text"],
        "url" => $_POST["url"]
    ];
    
    array_push($list, $inbox);
}
//echo var_dump($list);

$cssLibrary = "bootstrap";
$pageTitle = "Programación Web II";

require_once("./views/index.view.php");