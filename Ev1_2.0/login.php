<?php require_once './vistas/header.php'; ?>
<?php if (isset($_SESSION['usuarioerror'])) : ?>
    <div class="alert alert-danger">
        <?= $_SESSION['usuarioerror']; ?>
    </div>
    <?php unset($_SESSION['usuarioerror']); ?>
<?php endif; ?>

<h3>Login</h3>
<form action="controller/loginController.php" method="POST">
    <div class="form-floating">
        <label for="floatingInput">Ingrese email</label>
        <input class="form-control" type="email" name="email" required>

    </div>
    <div class="form-floating mt-4">
        <label for="floatingPassword">Ingrese contraseña</label>
        <input class="form-control" type="password" name="password" required>

    </div>
    <br>
    <button class="btn btn-success btn-block">Ingresar</button>
</form>

<?php require_once './vistas/footer.php'; ?>