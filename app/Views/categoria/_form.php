        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $categoria['titulo'] ?>">
        <button type="submit"> <?= $op ?></button>
        <div></div>
        <a href="<?= site_url($ruta ?? '/dashboard/categoria') ?>">Volver</a>