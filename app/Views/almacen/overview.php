<h2><?= esc($title) ?></h2>

<?php if (! empty($almacen) && is_array($almacen)): ?>

    <?php foreach ($almacen as $almacen_item): ?>

        <h3><?= esc($almacen_item['codigo']) ?></h3>

        <div class="main">
            <?= esc($almacen_item['texto']) ?>
        </div>
        <p><a href="/almacen/<?= esc($almacen_item['id'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Almacen</h3>

    <p>Unable to find any almacen for you.</p>

<?php endif ?>