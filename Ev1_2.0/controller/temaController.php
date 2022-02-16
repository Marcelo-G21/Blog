<?php

require_once('../Ev1/vendor/autoload.php');
require_once('../Ev1/models/Database/Database.php');


use Illuminate\Database\Capsule\Manager as DB;

class Tema{
    public function index(){
        $tema = DB::table('tema')->get();
        return $tema;
    }
}
