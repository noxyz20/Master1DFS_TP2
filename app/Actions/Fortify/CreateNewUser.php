<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use \PDO;
use Auth;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

       
        if (empty(User::get()[0])) {
            $token = 1;
        }else{
            $token = User::get()[0]->token + 1;
        }
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $default_color = '["#363636", "#2b73b3", "#4db3e9", "#e8362c", "#ffffff"]';
        $default_nav = '{"nav":[{"name":"Home", "link": "/home"},{"name":"Post", "link": "/post"}]}';
        $default_header = '["Logo", "Titre", "Menu"]';
        $default_footer = '© '.$input['name'].', All right reserved';
        $default_main = "0";
        $default_Logo = "https://upload.wikimedia.org/wikipedia/commons/1/1f/Font_Awesome_5_solid_plane-arrival.svg";
        $columnsSite = "ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY, Title VARCHAR( 50 ) NOT NULL, Colors JSON NOT NULL, Nav json NOT NULL, Header json NOT NULL,
         Main INT( 50 ) NOT NULL, Logo VARCHAR( 250 ), Footer TEXT NOT NULL " ;
        $columnsComment = "ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY, user VARCHAR( 50 ) NOT NULL, id_post INT( 50 ) NOT NULL, content TEXT NOT NULL " ;
        $columnsPost = "ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY, Title VARCHAR( 50 ) NOT NULL, Banner VARCHAR( 50 ) NOT NULL,
         Content TEXT NOT NULL ";
        try{
            $dbco = new PDO("mysql:host=$servername", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
            $dbco->exec('CREATE DATABASE db_'.$token);
            $dbco->exec("CREATE TABLE IF NOT EXISTS db_$token.siteSettings ($columnsSite)");
            $dbco->exec("CREATE TABLE IF NOT EXISTS db_$token.comments ($columnsComment)");
            $dbco->exec("CREATE TABLE IF NOT EXISTS db_$token.posts ($columnsPost)");
            $req = $dbco->prepare("INSERT INTO db_$token.sitesettings (Colors, Title, Nav, Header, Main, Logo, Footer) VALUES (:Colors, :Title, :Nav, :Header, :Main, :Logo, :Footer)");
            $req->bindParam(':Colors', $default_color);
            $req->bindParam(':Title', $input['name']);
            $req->bindParam(':Nav', $default_nav);
            $req->bindParam(':Header', $default_header);
            $req->bindParam(':Main', $default_main);
            $req->bindParam(':Logo', $default_Logo);
            $req->bindParam(':Footer', $default_footer);
            $req->execute();
        }
        
        catch(PDOException $e){
          echo "Erreur : " . $e->getMessage();
        }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'token' => $token,
            'password' => Hash::make($input['password']),
        ]);
    }
}
