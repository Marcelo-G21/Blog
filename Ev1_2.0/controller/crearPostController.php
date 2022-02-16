<?php
session_start();
require_once('../models/PostBlog/PostBlog.php');

$titulo = $_POST['titulo'];
$tema = $_POST['tema'];
$contenido = $_POST['contenido'];

try{
    PostBlog::crear($titulo, $tema, $contenido);
    $_SESSION['crear'] = "El post se ha creado correctamente";
}catch(PDOException $e){
    echo $e;
}
header("Location: ../crearPost.php");

?>