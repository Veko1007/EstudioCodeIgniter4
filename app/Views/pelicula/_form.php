<label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $pelicula['titulo'] ?>" required><br>

        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion" required><?= $pelicula['descripcion'] ?></textarea><br>

        <button type="submit"><?= $op ?></button>
        <div></div>
        <a href="<?= site_url($ruta ?? '/dashboard/pelicula') ?>">Volver</a>