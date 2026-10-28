<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoría</title>
</head>
<body>
    <h1>Crear Categoría</h1>
    <form action="<?= site_url('categoria/create') ?>" method="post">
        <?=  view('categoria/_forn', ['categoria' => $categoria, 'op' => 'Crear Categoría']) ?>
    </form>
</body>
</html>