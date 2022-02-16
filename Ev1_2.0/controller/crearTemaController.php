<?php
session_start();
require_once('../models/Tema/Tema.php');

$tema = $_POST['tema'];

try{
    Tema::crear($tema);
    $_SESSION['creart'] = "El tema se ha creado correctamente";
}catch(PDOException $e){
    echo $e;
}
header("Location: ../crearTema.php");

?>