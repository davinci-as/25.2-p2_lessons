<h1> <?= $pageTitle ?>: <?= $topic ?> </h1>

<div class="container">
    <div class="row" id="post_container">
        <?php for ($i = 0; $i < count($list); $i++) {
            require("./components/card.php");
        } ?>
    </div>
</div>