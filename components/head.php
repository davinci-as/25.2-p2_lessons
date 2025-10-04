<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $pageTitle ?> </title>
    <?php if ($cssLibrary == "bootstrap") { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <?php } else if ($cssLibrary == "custom") { ?>
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