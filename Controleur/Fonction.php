<?php 
include("Connexionbdd.php"); 

function inscription ( string $username,string $passeword , string $email)
{
    Global $bdd;
    $reponse = $bdd->prepare('INSERT INTO users(username,motdepasse,mail) VALUES (:username,:motdepasse,:mail)');
    $reponse->execute(array( 
        "username" => $username,
        "motdepasse" => $passeword,
        "mail" => $email,
    ));
    header("Location:connexion.php"); 
}

function connexion(string $username,string $passeword)
{
    Global $bdd;
    $reponse = $bdd->prepare('SELECT username,motdepasse FROM users WHERE username = :username ');
    $reponse->execute(array( 
        "username" => $username
    ));
    $donnees = $reponse -> fetch();
    if ($donnees['motdepasse']== $passeword){
        header("Location:liste.php");
    }else{
        echo "";
    }
}

function  insererPhrase(string $phrase){
    Global $bdd;
    $reponse = $bdd->prepare('INSERT INTO listes(phrase,ladate) VALUES (:phrase,:ladate)');
    $reponse->execute(array( 
        "phrase" => $phrase,
        "ladate" => date("Y-m-d")
    ));
}

function afficherSaisie (){
    Global $bdd;
    $reponse = $bdd->query('SELECT * FROM listes');
    return $reponse;
}

function supprimerLigne (string $id){
    Global $bdd;
    $reponse = $bdd-> prepare('DELETE FROM listes WHERE id = :id');
    $reponse -> execute(array( 
        "id" => $id,
    ));
}

function updateLigne (string $id , string $phrase){
   
    
}



?>

