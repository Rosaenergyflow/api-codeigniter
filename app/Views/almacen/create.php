
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/almacen/create" method="post">
    <?= csrf_field() ?>

    <label for="codigo">Codigo</label>
    <input type="input" name="codigo" /><br />

    <label for="texto">Texto</label>
    <textarea name="texto" cols="45" rows="4"></textarea><br />

    <input type="submit" name="submit" value="Create almacen item" />
</form>