<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;

class UserController extends Controller
{
    public function indexSetting(Request $request){
        $bdd = new \PDO('mysql:host=localhost;dbname=db_'.Auth::user()->token.'', 'root', '');
        $set = $bdd->prepare('SELECT * FROM sitesettings');
        $set->execute();
        $set = $set->fetchAll();
        return view("profile.user-settings", [
            "setting" => $set,
        ]);
    }
    public function updateSetting(Request $request){
        $bdd = new \PDO('mysql:host=localhost;dbname=db_'.Auth::user()->token.'', 'root', '');
        $sql = "UPDATE sitesettings SET Colors=?, Title=?, Header=?, Main=?, Logo=?, Footer=? WHERE id=1";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$request->color, $request->title, $request->header, $request->main, $request->logo, $request->footer]);
        
        return back();
    }
}
