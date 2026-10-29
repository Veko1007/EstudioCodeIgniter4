    <?= $this->extend('layouts/dashboard') ?>
    <?= $this->section('contenido') ?>
    <?=  view('/partials/_session') ?>
    <a href="<?= site_url('/dashboard/pelicula/new') ?>">Agregar Pelicula</a>
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
                    <a href="<?= site_url('/dashboard/pelicula/edit/'.$pelicula['id']) ?>">Editar</a>
                    <a href="<?= site_url('/dashboard/pelicula/show/'.$pelicula['id']) ?>">Ver</a>
                    <form action="<?= site_url('/dashboard/pelicula/delete/'.$pelicula['id']) ?>" method="post" style="display:inline;">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        
    </table>
    <?= $this->endSection() ?>
    