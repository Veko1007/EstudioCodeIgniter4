<?php if (session('success')) : ?>
    <div class="alert alert-success">
        <?= session('success') ?>
    </div>
    <?php endif; ?>