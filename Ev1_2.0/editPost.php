<?php
require_once('vendor/autoload.php');
require_once('models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

$post = DB::table('post')->where('id', '=', $_GET['id'])->get();
?>

<?php require_once './vistas/header.php'; ?>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="controller/updatePostController.php" method="POST">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" name="titulo" value="<?= $post[0]->titulo ?> " class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tema</label>
                        <input type="text" name="tema" value="<?= $post[0]->tema ?> " class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <input type="text" name="contenido" value="<?= $post[0]->contenido ?> " class="form-control">
                    </div>
                    <input type="hidden" name="id" value="<?= $post[0]->id ?> ">
                    <div class="form-group">
                        <button class="btn btn-success btn-block">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once './vistas/footer.php';  ?>