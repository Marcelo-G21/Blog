<?php
session_start();
require_once '../models/Usuario/Usuario.php';
use Illuminate\Database\Capsule\Manager as DB;

$email = $_POST['email'];
$password = $_POST['password'];

try{
    $usuario = DB::table('usuario')->select('password')
    ->where('email', '=' ,$email)
    ->get();

    if(empty($usuario[0])){
        $_SESSION['usuarioerror'] = "Email incorrecto.";
        header("Location: ../login.php");
    }else{

        $pass = $usuario[0]->password;

        if(!password_verify($password, $pass)){
            $_SESSION['usuarioerror'] = "Contraseña incorrecta.";
            header("Location: ../login.php");
        }else{          
            $_SESSION['usuario'] = "Bienvenido $email";
            header("Location: ../index.php");
        }
    }
    
}catch(PDOException $e){
    echo $e;
}
