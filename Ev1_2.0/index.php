<?php

require_once 'controller/postController.php';
$post = new Post;
$arrayPosts = json_decode(json_encode($post->index()), True);
?>

<?php require_once './vistas/header.php'; ?>
<div class="row">
    <div class="col-md-9">
        <h3>Posts</h3>
        <a href="crearPost.php">
            <button class="btn btn-success mb-2" style="float:right">
                Agregar nuevo post
            </button>
        </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col1">Tema</th>
                    <th scope="col1">Título</th>
                    <th scope="col1">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($arrayPosts)) : ?>
                    <?php foreach ($arrayPosts as $row) : ?>
                        <tr>
                            <td><?= $row['tema']; ?></td>
                            <td><?= $row['titulo']; ?></td>
                            <td>
                                <a href="editPost.php?id=<?= $row['id']; ?>" class="btn btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                    </svg>
                                </a>

                                <a type="submit" class="btn btn-danger" href="controller/deletePostController.php?id=<?= $row['id']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </a>

                                <a type="submit" class="btn btn-success" href="vistaPost.php?id=<?= $row['id']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="alert alert-warning">
                        Por ahora no hay ningun dato agregado.
                    </div>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-3">
        <?php if (isset($_SESSION['usuario'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['usuario']; ?>
            </div>
            <?php unset($_SESSION['usuario']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['delete'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['delete']; ?>
            </div>
            <?php unset($_SESSION['delete']); ?>
        <?php endif; ?>
    </div>

</div>
<?php require_once './vistas/footer.php'; ?>