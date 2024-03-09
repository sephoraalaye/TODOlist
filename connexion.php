<?php include("Controleur/Fonction.php"); ?>

<?php

if (isset($_POST["nom"]) and isset($_POST["password"])) {
    $username = $_POST["nom"];
    $passeword = $_POST["password"];
    connexion($username,$passeword);
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
         <div class="bloc item5"></div>
         <div class="bloc item6"></div>
         <div class="bloc item7"></div>
         <div class="bloc item8"></div>
         <div class="bloc item9"></div>
    </div>
    <form action="" class=" flexibility1 espacementgap inscription widthConnexion " method="post">
        <div style="margin-bottom: 5%; font-size: 2em;"> CONNEXION </div>  
        <input class="Fondcolor" type="text" name="nom" id="nom" placeholder="Username"> <br>
        <input class="Fondcolor" type="password" name="password" id="password" placeholder="Password"> <br>
        <input class="couleurdefond" type="submit" value="SIGN-IN">
    </form> 
</body>
</html> 
