<?php 
session_start();
require_once '../models/Tema/Tema.php';

$id = $_GET['id'];

try{
    Tema::delete($id);
    $_SESSION['deletet'] = "Se ha eliminado correctamente el tema";
}catch(PDOException $e){
    echo $e;
}

header("Location: ../Temas.php");