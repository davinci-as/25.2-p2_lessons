<!DOCTYPE html>
<html lang="en">
<?php require_once("./components/head.php") ?>

<body>
    <?php require_once("./components/header.php") ?>
    <h1> <?= $pageTitle ?>: <?= $topic ?> </h1>
    <?php require_once("./views/home.view.php") ?>
    <!--?php require_once("./views/new-card.view.php") ?-->
    <?php require_once("./components/footer.php") ?>

</body>

</html>