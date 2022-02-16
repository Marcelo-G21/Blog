<?php

require_once 'controller/temaController.php';
$tema = new Tema;
$arrayTemas = json_decode(json_encode($tema->index()), True);
?>


<?php require_once './vistas/header.php'; ?>

<div class="row">
    <div class="col-md-6">
        <h3>Crear Post</h3>
        <form action="controller/crearPostController.php" method="POST">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="tema">Tema</label>
                <select name="tema" class="form-control">
                    <option value="">Seleccione tema</option>
                    <?php foreach ($arrayTemas as $row) : ?>
                        <option value="<?= $row['tema']; ?>"><?= $row['tema']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea class="form-control" name="contenido" rows="3"></textarea>
            </div>
            <br>
            <button class="btn btn-success btn-block">Publicar</button>
        </form>
        <br>
        <a href="index.php">
            <button class="btn btn-success btn-block">Volver</button>
        </a>

    </div>
    <div class="col-md-6">
        <?php if (isset($_SESSION['crear'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['crear']; ?>
            </div>
            <?php unset($_SESSION['crear']); ?>
        <?php endif; ?>
    </div>
</div>

<?php require_once './vistas/footer.php'; ?>