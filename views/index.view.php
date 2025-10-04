<!DOCTYPE html>
<html lang="en">
<?php require_once("./components/head.php") ?>

<body>
    <?php require_once("./components/header.php") ?>
    <h1> <?= $pageTitle ?>: <?= $topic ?> </h1>
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < count($list); $i++) {
                require("./components/card.php");
            } ?>
        </div>
    </div>
    <div class="container mt-4">
        <?php require_once("./components/form-card.php") ?>
    </div>
    <?php require_once("./components/footer.php") ?>

</body>

</html>