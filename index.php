<?php
require_once("./utils/data.php");
require_once("./utils/format.php");
require_once("./utils/connection.php");
require_once("./utils/postData.php");


$topic = "";
$format = "column";
$list = [];
$page = "home";

function paths ($route) {
    return $route["route"];
}

$routes = array_map("paths",$fullRoutes);

if(isset($_GET["page"])) {
    $page = $_GET["page"];
    if(!in_array($page, $routes)) {
        $page = "404";
    }
}

$topic = $_GET["topic"];

if(isset($_GET["topic"])) {
    for ($i=0; $i < count($fullPosts); $i++) { 
        $post = $fullPosts[$i];
        if($post["topic"] == $topic) {
            //var_dump($github);
            array_push($list, $post);
        }
    }
} else {
    $list = $fullPosts;
}


/*if (isset($_GET["topic"])) {
    
    if ($topic == "git provider") {
        $list = [$github, $gitlab, $bitbucket];
    } else if ($topic == "frameworks javascript") {
        $list = [$react, $angular];
    }
}*/

if (isset($_GET["format"])) {
    $format = $_GET["format"];
}


if (
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

$cssLibrary = "bootstrap";
$pageTitle = "Programación Web II";

require_once("./views/index.view.php");
