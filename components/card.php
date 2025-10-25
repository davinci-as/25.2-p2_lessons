<div class="card" style="width: <?= setFormat($format); ?>">
    <img src="<?= $list[$i]["url"] ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            <?= $list[$i]["title"] ?>
        </h5>
        <p class="card-text">
            <?= $list[$i]["text"] ?>
        </p>
        <a href="<?= $list[$i]["link"] ?>" class="btn btn-primary">Ir a web</a>
    </div>
</div>