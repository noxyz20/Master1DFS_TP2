<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $bdd = new \PDO('mysql:host=localhost;dbname=db_'.\Auth::user()->token.'', 'root', '');
        $posts = $bdd->prepare('SELECT * FROM posts ORDER BY ID DESC');
        $posts->execute();
        $posts = $posts->fetchAll();
        return view('posts', [
            'posts' => $posts,
        ]);
    }
    public function create(Request $request)
    {

        $imageName = time().'.'.$request->banner->extension();

        $request->banner->move(public_path('images/'), $imageName);
        $title = $request->title;
        $content = $request->content;
        $bdd = new \PDO('mysql:host=localhost;dbname=db_'.\Auth::user()->token.'', 'root', '');
        $req = $bdd->prepare("INSERT INTO db_".\Auth::user()->token.".posts (Title, Banner, Content) VALUES (:Title, :Banner, :Content)");
        $req->bindParam(':Title', $title);
        $req->bindParam(':Banner', $imageName);
        $req->bindParam(':Content', $content);
        $req->execute();  

        return back();
    }
}
