<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>
    <h1>Lista Peliculas</h1>
    <a href="<?= site_url('pelicula/new') ?>">Agregar Pelicula</a>
    <table> 
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($peliculas as $pelicula): ?>
            <tr>
                <td><?= $pelicula['id'] ?></td>
                <td><?= $pelicula['titulo'] ?></td>
                <td><?= $pelicula['descripcion'] ?></td>
                <td>
                    <a href="<?= site_url('pelicula/edit/'.$pelicula['id']) ?>">Editar</a>
                    <a href="<?= site_url('pelicula/remove/'.$pelicula['id']) ?>">Eliminar</a>
                    <a href="<?= site_url('pelicula/show/'.$pelicula['id']) ?>">Ver</a>
                    <form action="<?= site_url('pelicula/delete/'.$pelicula['id']) ?>" method="post" style="display:inline;">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>