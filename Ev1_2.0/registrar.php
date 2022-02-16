<?php require_once './vistas/header.php'; ?>

<?php if(isset($_SESSION['registro'])): ?>
<div class="alert alert-success">
    <?= $_SESSION['registro']; ?>
</div>
<?php unset($_SESSION['registro']); ?>
<?php endif; ?>
<h3>Registrar</h3>
<form action="controller/registroController.php" method="POST">
    <div class="form-floating">
        <label for="floatingInput">Nombre</label>
        <input class="form-control" type="text" name="nombre" required>
    </div>
    <div class="form-floating mt-4">
        <label for="floatingPassword">Apellido</label>
        <input class="form-control" type="text" name="apellido" required>
    </div>
    <div class="form-floating mt-4">
        <label for="floatingPassword">Email</label>
        <input class="form-control" type="email" name="email" required>
    </div>
    <div class="form-floating mt-4">
        <label for="floatingPassword">Password</label>
        <input class="form-control" type="password" name="password" required>
    </div>
    <br>
    <button class="btn btn-success btn-block">Registrar</button>
</form>

<?php require_once './vistas/footer.php'; ?>