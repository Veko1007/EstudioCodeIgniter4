<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
</head>
<body>
    <h1>Editar Categoría</h1>
    <form action="<?= site_url('/dashboard/categoria/update/'.$categoria['id']) ?>" method="post">
        <?=  view('categoria/_form', ['categoria' => $categoria, 'op' => 'Actualizar Categoría']) ?>
    </form>
</body>
</html>