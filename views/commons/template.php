<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,500&display=swap" rel="stylesheet">
    <meta name="description" content="<?= $page_description ?>">
    <link rel="stylesheet" href="<?= URL ?>public/style/style.css">
    <title><?= $page_title ?></title>
</head>

<body>

    <?php require_once("views/commons/overlay.php") ?>
    <?php require_once("views/commons/header.php") ?>

    <?php
    if (!empty($_SESSION['alert'])) {
        foreach ($_SESSION['alert'] as $alert) {
            echo "<div class='alert " . $alert['type'] . "' role='alert'>
                        " . $alert['message'] . "
                    </div>";
        }
        unset($_SESSION['alert']);
    }
    ?>

    <?= $page_content ?>

    <?php require_once("views/commons/footer.php") ?>




    <?php if (!empty($js)) : ?>
        <?php foreach ($js as $fichierJS) : ?>
            <script src="<?= URL ?>public/javascript/<?= $fichierJS ?>"> </script>
        <?php endforeach ?>
    <?php endif ?>
</body>

</html>