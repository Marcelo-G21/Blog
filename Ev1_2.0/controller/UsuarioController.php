<?php

require_once('../vendor/autoload.php');
require_once('../Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

class Usuario{
    public function index(){
        $usuarios = DB::table('usuario')->get();
        return $usuarios;
    }
}


?>