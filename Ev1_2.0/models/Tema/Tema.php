<?php

require_once('../vendor/autoload.php');
require_once('../models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

class Tema{

    public static function crear($tema){
        DB::table('tema')->insert([
            'tema'      => $tema
        ]);
    }
    public static function update($id, $tema)
    {
        DB::table('tema')->where('id', '=',$id)->update([
            'tema'      => $tema
        ]);
    }
    public static function delete($id)
    {
        DB::table('tema')->where('id', '=', $id)->delete();
    }
}

?>