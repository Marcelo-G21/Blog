<?php 
require_once '../models/Tema/Tema.php';

$id = $_POST['id'];
$tema = $_POST['tema'];

try{
    Tema::update($id, $tema);
}catch(PDOException $e){
    echo $e;
}

header("Location: ../Temas.php");