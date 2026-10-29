<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('contenido') ?>
    <?=  view('/partials/_session') ?>
    <a href="<?= site_url('/dashboard/categoria/new') ?>">Agregar Categoría</a>
    <a href="<?= site_url('/dashboard/categoria/login') ?>" class="btn btn-success">Simular Login</a>
    <a href="<?= site_url('/dashboard/categoria/logout') ?>" class="btn btn-danger">Cerrar Sesión</a>
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
                    <a href="<?= site_url('/dashboard/categoria/edit/'.$categoria['id']) ?>">Editar</a>
                    <form action="<?= site_url('/dashboard/categoria/delete/'.$categoria['id']) ?>" method="post" style="display:inline;">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?= $this->endSection() ?>
