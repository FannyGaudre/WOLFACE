<?php
// Script login.php utilisé pour la connexion à la BD


$host = "ipabdd.iut-lens.univ-artois.fr"; // le chemin vers le serveur (localhost dans 99% des cas)

$db = "valentinvanhaecke";
// A l IUT, 3 possibilité prenomnom prenomnom1...

$user = "valentin.vanhaecke";
// A l iut prenom.nom

$passwd = "+sN5Pamn";
// A l iut, généré automatiquement

try {
    // On essaie de créer une instance de PDO.
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br />";
    die(1);
}


?>