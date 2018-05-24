<?php
session_start();  // démarrage d'une session
require 'config.inc.php';
// on vérifie que les données du formulaire sont présentes
if (isset($_POST['login']) && isset($_POST['pass'])) {   
    $bdd = getBdd();
    // cette requête permet de récupérer l'utilisateur depuis la BD
    $requete = "SELECT * FROM utilisateur WHERE Login= adje AND Pass=enyo";
    $resultat = $bdd->prepare($requete);
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $resultat->execute(array($login, pass));
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        $_SESSION['login'] = $login;
        $_SESSION['pass'] = $pass;
        // cette variable indique que l'authentification a réussi
        $authOK = true;
    }
}
?>