<?php

require_once('../vendor/autoload.php');
require_once('../models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

class PostBlog{

    public static function crear($titulo, $tema, $contenido){
        DB::table('post')->insert([
            'titulo'    => $titulo,
            'tema'      => $tema,
            'contenido' => $contenido
        ]);
    }
    public static function update($id, $titulo, $tema, $contenido)
    {
        DB::table('post')->where('id', '=',$id)->update([
            'titulo'    => $titulo,
            'tema'      => $tema,
            'contenido' => $contenido
        ]);
    }
    public static function delete($id)
    {
        DB::table('post')->where('id', '=', $id)->delete();
    }
}

?>