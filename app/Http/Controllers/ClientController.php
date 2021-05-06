<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ClientController extends Controller
{
    public function home($token) {
        $bdd = new \PDO('mysql:host=localhost;dbname=db_'.$token.'', 'root', '');
        $set = $bdd->prepare('SELECT * FROM sitesettings');
        $set->execute();
        $set = $set->fetchAll();
        $posts = $bdd->prepare('SELECT * FROM posts ORDER BY ID DESC LIMIT 0, 10');
        $posts->execute();
        $posts = $posts->fetchAll();
        $user = User::where('id', \Auth::id())->get();
        return view('client.home', [
            "setting" => $set,
            "posts" => $posts,
            "token" => $user[0]->token,
        ]);
    }
    public function news($token, $id) {
        $bdd = new \PDO('mysql:host=localhost;dbname=db_'.$token.'', 'root', '');
        $set = $bdd->prepare('SELECT * FROM sitesettings');
        $set->execute();
        $set = $set->fetchAll();
        $post = $bdd->prepare('SELECT * FROM posts WHERE id = '.$id);
        $post->execute();
        $post = $post->fetchAll();
        $user = User::where('id', \Auth::id())->get();
        return view('client.new', [
            "setting" => $set,
            "post" => $post,
            "token" =>  $user[0]->token,
        ]);
    }
}
