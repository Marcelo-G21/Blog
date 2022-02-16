<?php
require_once('vendor/autoload.php');
require_once('models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

$tema = DB::table('tema')->where('id', '=', $_GET['id'])->get();
?>

<?php require_once './vistas/header.php'; ?>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="controller/updateTemaController.php" method="POST">
                    <div class="form-group">
                        <label>Tema</label>
                        <input type="text" name="tema" value="<?= $tema[0]->tema ?> " class="form-control">
                    </div>
                    <input type="hidden" name="id" value="<?= $tema[0]->id ?> ">
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