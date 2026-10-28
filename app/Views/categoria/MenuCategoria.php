<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menú de Categorías</h1>
    <a href="<?= site_url('categoria/new') ?>">Agregar Categoría</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?= $categoria['id'] ?></td>
                <td><?= $categoria['titulo'] ?></td>
                <td>
                    <a href="<?= site_url('categoria/edit/'.$categoria['id']) ?>">Editar</a>
                    <form action="<?= site_url('categoria/delete/'.$categoria['id']) ?>" method="post" style="display:inline;">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= site_url('pelicula') ?>"> Ver Películas</a>
</body>
</html>