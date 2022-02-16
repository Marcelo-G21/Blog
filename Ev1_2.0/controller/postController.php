<?php

require_once('../Ev1/vendor/autoload.php');
require_once('../Ev1/models/Database/Database.php');


use Illuminate\Database\Capsule\Manager as DB;

class Post{
    public function index(){
        $posts = DB::table('post')->get();
        return $posts;
    }
}
