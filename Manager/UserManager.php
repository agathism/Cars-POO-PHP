<?php

/**
 * Récupère toutes les voitures de la base de données.
 *
 * @param PDO $pdo La connexion PDO.
 *
 * @return array Tableau d'instances Car.
 */
require_once("DatabaseManager.php");
require_once("Model/User.php");

// Class CarForm... ?
class UserManager extends DatabaseManager
{
    //Class UserManager
    public function selectUserByUsername(string $username): User|false
    {
        $requete = self::getConnexion()->prepare("SELECT * FROM user WHERE username = :username;");
        $requete->execute([
            ":username" => $username
        ]);
        $arrayUser = $requete->fetch();
        if(!$arrayUser){
            return false;
        }
        return new User( $arrayUser["id"], $arrayUser["username"], $arrayUser["password"]);
    }
}
