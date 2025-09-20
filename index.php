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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $pageTitle ?> </title>
    <?php if($cssLibrary == "bootstrap") { ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <?php } else if($cssLibrary == "custom") {?>
    <style>
        .card {
            border: 1px solid #000;
            border-radius: 6px;
            padding: 1rem;
        }
        .card img {
            width: 100%;
        }
    </style>
    <?php } ?>
</head>
<body>
    <h1> <?= $pageTitle ?>: <?= $topic ?> </h1>
    <?php /* 1 - 3 */ ?>
    <div class="container">
        <div class="row">
            <?php for($i = 0; $i < count($list); $i++){ ?>
            <div class="card" style="width: <?= setFormat($format); ?>">
                <img src="<?= $list[$i]->url ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $list[$i]->title ?>
                    </h5>
                    <p class="card-text">
                        <?= $list[$i]->text ?>
                    </p>
                    <a href="<?= $list[$i]->link ?>" class="btn btn-primary">Ir a web</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="container mt-4">
        <form action="/25.2-p2_lessons/" method="post">

            <div class="input-group mb-3">
                <input name="name"  type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="input-group mb-3">
                <input name="title"  type="text" class="form-control" placeholder="Titulo">
            </div>
            <div class="input-group mb-3">
                <input name="link"  type="text" class="form-control" placeholder="Link">
            </div>
            <div class="input-group mb-3">
                <input name="text"  type="text" class="form-control" placeholder="Texto">
            </div>
            <div class="input-group mb-3">
                <input name="url"  type="text" class="form-control" placeholder="Url">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar datos</button>
            </div>

        </form>
    </div>
</body>
</html>