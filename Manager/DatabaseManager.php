<?php

class DatabaseManager
{
    protected static ?PDO $pdo = null;
    protected static function getConnexion()
    {
        //Si la connexion n'existe pas je la créé 
        //Self c''st comme si on écrivait databaseManager dans lui même. 
        if (self::$pdo === null) {
            //Créer connexion
            //Comme on va réeutiliser connectDb on va le mettre en static en utilisant self::suivi du nom de la bdd
            self::$pdo = self::connectDB();
            //Sinon je la retourne
        }
        return self::$pdo;
    }
    private static function connectDB(): PDO
    {
        $host = 'localhost';
        $dbName = 'garage12';
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbName . ';charset=utf8', $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo;
        } catch (Exception $e) {
            echo ("Erreur de connexion a la base de données. connectDB()");
            die();
        }
    }

}
