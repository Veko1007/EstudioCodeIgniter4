<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pelicula</title>
</head>
<body>
    <form action="<?= site_url('pelicula/update/'.$pelicula['id']) ?>" method="post">
        <?=  view('pelicula/_form', ['op' => 'Actualizar Pelicula']) ?>
    </form>
</body>
</html>