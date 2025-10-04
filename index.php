<?php
require_once("./utils/data.php");
require_once("./utils/format.php");

$topic = "";
$format = "column";
$list = [];
$page = "home";

if(isset($_GET["page"])) {
    //TODO: validar que la pagina sea valida
    $page = $_GET["page"]; 
}

if (isset($_GET["topic"])) {
    $topic = $_GET["topic"];
    if ($topic == "git provider") {
        $list = [$github, $gitlab, $bitbucket];
    } else if ($topic == "frameworks javascript") {
        $list = [$react, $angular];
    }
}

if (isset($_GET["format"])) {
    $format = $_GET["format"];
}
if($topic == ""){
    $list = [$github, $gitlab, $bitbucket, /*$react,*/ $angular];
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
//echo var_dump($list);

$cssLibrary = "bootstrap";
$pageTitle = "Programación Web II";

require_once("./views/index.view.php");
