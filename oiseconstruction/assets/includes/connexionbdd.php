<?php
$servername = 'localhost';
$username = 'root';
$password = '';
try {
    //On établit la connexion
    $connexion = new PDO("mysql:host=$servername;", $username, $password);
    //Définir les modes d'erreurs et d'exceptions
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //on va affecter notre requete sql à une variable
    $sql = "CREATE DATABASE oiseconstruction CHARACTER SET utf8 COLLATE utf8_bin";
    //on execute la requete sql
    $connexion->exec($sql);
}
//On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
catch(PDOException $e) {
    date_default_timezone_set("Europe/Paris");
    setlocale(LC_TIME,"fr_FR");
    $fichier = fopen("error.log","a+");
    fwrite($fichier, date("d/m/Y H:i:s : ").$e->getMessage(). "\n");
    fclose($fichier);
}

//les variables de connexion
$servername = 'localhost';
$dbname = 'oiseconstruction';
$username = 'root';
$password = '';
try {
    //On établit la connexion
    $connexion = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    //Définir les modes d'erreurs et d'exceptions
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //on va affecter notre requete sql à une variable
    $sql = "CREATE TABLE client (
        id INT(5) AUTO_INCREMENT PRIMARY KEY,
        civilite VARCHAR(5) NOT NULL,
        prenom	VARCHAR(70) NOT NULL,
        nom	VARCHAR(70) NOT NULL,
        mail VARCHAR(100) NOT NULL,
        telephone	INT(10),
        adresse	VARCHAR(170),
        codePostal	INT(5),
        ville	VARCHAR(50),
        demande VARCHAR(10),
        mot VARCHAR(5000)
    )CHARACTER SET utf8 COLLATE utf8_bin";
    //on execute la requete sql
    $connexion->exec($sql);
   
}
//On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
catch(PDOException $e) {
    $fichier = fopen("error.log","a+");
    fwrite($fichier, date("d/m/Y H:i:s : ").$e->getMessage(). "\n");
    fclose($fichier);
}

?>