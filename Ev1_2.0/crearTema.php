<?php require_once './vistas/header.php'; ?>

<div class="row">
    <div class="col-md-6">
        <h3>Crear Tema</h3>
        <form action="controller/crearTemaController.php" method="POST">
            <div class="form-group">
                <label for="Tema">Nuevo Tema</label>
                <input type="tema" class="form-control" name="tema">
            </div>
            <br>
            <button class="btn btn-success btn-block">Crear</button>
        </form>
        <br>
        <a href="Temas.php">
            <button class="btn btn-success btn-block">Volver</button>
        </a>

    </div>
    <div class="col-md-6">
        <?php if (isset($_SESSION['creart'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['creart']; ?>
            </div>
            <?php unset($_SESSION['creart']); ?>
        <?php endif; ?>
    </div>
</div>

<?php require_once './vistas/footer.php'; ?>