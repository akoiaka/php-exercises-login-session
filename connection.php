<?php
$serveur="localhost";
$dbname="parlons_cryptage";
$login="akoi";
$password="ok";

try{
    // requête de connexion à la base de données, nous entrons la localisation de notre BDD ici "localhost", le name de notre tableau ici "exojournal", le nom d'utilisateur et le mot de passe du SQL lié à notre host
    $bdd = new PDO('mysql:host='.$serveur.';dbname='.$dbname.'',$login,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    echo 'connexion reussie';
}
catch(PDOException $e){
    echo 'Connexion impossible';
}