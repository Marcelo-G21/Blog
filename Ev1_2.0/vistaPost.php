<?php
require_once('vendor/autoload.php');
require_once('models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

$post = DB::table('post')->where('id', '=', $_GET['id'])->get();
?>

<?php require_once './vistas/header.php'; ?>
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h4><?= $post[0]->tema ?></h4>
                <h2><?= $post[0]->titulo ?></h2>
                <h5><?= $post[0]->contenido ?></h5>
            </div>
        </div>
    </div>
    <a href="index.php">
        <button class="btn btn-success">Volver</button>
    </a>
</div>


<?php require_once './vistas/footer.php';  ?>