<?php 
session_start();
require_once '../models/PostBlog/PostBlog.php';

$id = $_GET['id'];

try{
    PostBlog::delete($id);
    $_SESSION['delete'] = "Se ha eliminado correctamente el post";
}catch(PDOException $e){
    echo $e;
}

header("Location: ../index.php");