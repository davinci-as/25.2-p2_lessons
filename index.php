<?php

function getImage($name) {
    $images = array(
        "https://cdn.prod.website-files.com/5f5a53e153805db840dae2db/64e79ca5aff2fb7295bfddf9_github-que-es.jpg",
        "https://miro.medium.com/v2/resize:fit:1400/format:webp/1*OgR4jtnczW-hZUCB-gOg_g.png",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbsuQQUD-CKSk5-Pw6zmAPPO7_4CtaarQ7_g&s"
    );
    if($name == "github") return $images[0];
    if($name == "gitlab") return $images[1];
    if($name == "bitbucket") return $images[2];
    return "https://edteam-media.s3.amazonaws.com/blogs/big/2ab53939-9b50-47dd-b56e-38d4ba3cc0f0.png";
}


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
    <h1>
        <?php
        echo $pageTitle; 
        ?>
    </h1>

    <div class="card" style="width: 18rem;">
        <img src="<?= getImage("bitbucket") ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</body>
</html>