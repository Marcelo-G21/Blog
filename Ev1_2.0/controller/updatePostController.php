<?php 
require_once '../models/PostBlog/PostBlog.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$tema = $_POST['tema'];
$contenido = $_POST['contenido'];

try{
    PostBlog::update($id, $titulo, $tema, $contenido);
}catch(PDOException $e){
    echo $e;
}

header("Location: ../index.php");