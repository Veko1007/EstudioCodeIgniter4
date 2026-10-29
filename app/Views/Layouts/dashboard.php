<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1><?= $titulo ?? 'Dashboard' ?></h1>
    <?=  $this->renderSection('contenido') ?>
        <a href="<?= site_url($ruta ?? '') ?>">
            <?= $textoRuta ?? 'Volver' ?>
        </a>
</body>
</html>