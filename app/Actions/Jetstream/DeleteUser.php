<?php

namespace App\Actions\Jetstream;

use Laravel\Jetstream\Contracts\DeletesUsers;
use Auth;
use \PDO;
class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {
        $servname = "localhost"; 
        $dbname = 'db_'.Auth::token(); 
        $usr = "root"; 
        $pass = "";
        try{
            $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $usr, $pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbco->exec('DROP DATABASE '.$dbname);
        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
