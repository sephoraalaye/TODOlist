<?php include("Controleur/Fonction.php"); ?>

<?php
if (isset($_POST["nom"]) and isset($_POST["email"]) and isset($_POST["password"]) and isset($_POST["accepter"])) {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    inscription($nom,$password,$email);
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css"> 
    <title>TODOlist - Inscription</title>
</head>
<body class="flexibility couleurdefond ">
    <div>
         <div class="bloc item1"></div>
         <div class="bloc item2"></div>
         <div class="bloc item3"></div>
         <div class="bloc item4"></div>
         <div class="bloc item6"></div>
         <div class="bloc item7"></div>
         <div class="bloc item8"></div>
         <div class="bloc item9"></div>
    </div>
    <form action="" class=" flexibility1 espacementgap inscription widthInscription " method="post">
        <div style="margin-bottom: 5%; font-size: 2em;"> INSCRIPTION </div>  
        <input class="Fondcolor" type="text" name="nom" id="nom" placeholder="Username" required> <br>
        <input class="Fondcolor" type="email" name="email" id="email" placeholder="Email" required> <br>
        <input class="Fondcolor" type="password" name="password" id="password" placeholder="Password" required> <br>
        <div><input type="checkbox" name="accepter"> I agree to the terms & Conditions <br> </div>
        <input class="couleurdefond" type="submit" value="SIGNUP">
        <div>I have already a count.<a href="connexion.php"> Sign in </a> here </div>
    </form> 
</body>
</html> 

