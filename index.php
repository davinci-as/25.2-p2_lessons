<?php

$github = (object) [
    'name' => 'github',
    'title' => "Github",
    'link' => "https://github.com",
    'text' => "Build and ship software on a single, collaborative platform",
    'url' => "https://cdn.prod.website-files.com/5f5a53e153805db840dae2db/64e79ca5aff2fb7295bfddf9_github-que-es.jpg",
];

$gitlab = (object) [
    "name" => 'gitlab',
    "title" => 'Gitlab',
    'link' => "https://gitlab.com",
    'text' => 'Build software, not toolchains. With native AI at every step.',
    'url' => "https://miro.medium.com/v2/resize:fit:1400/format:webp/1*OgR4jtnczW-hZUCB-gOg_g.png"
];

$bitbucket = (object) [
    "name" => "bitbucket",
    "title" => "Bitbucket",
    'link' => "https://bitbucket.org",
    'text' => "Code and CI/CD, powered by the Atlassian platform",
    "url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbsuQQUD-CKSk5-Pw6zmAPPO7_4CtaarQ7_g&s"
];


$gitProviders = [$github, $gitlab, $bitbucket];

$cardsCount =  count($gitProviders);
//echo var_dump($gitProviders);

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
    <h1> <?= $pageTitle ?></h1>
    <?php /* 1 - 3 */ ?>
    <?php for($i = 0; $i < $cardsCount; $i++){ ?>
    <div class="card" style="width: 18rem;">
        <img src="<?= $gitProviders[$i]->url ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?= $gitProviders[$i]->title ?>
            </h5>
            <p class="card-text">
                <?= $gitProviders[$i]->text ?>
            </p>
            <a href="<?= $gitProviders[$i]->link ?>" class="btn btn-primary">Ir a web</a>
        </div>
    </div>
    <?php } ?>
</body>
</html>