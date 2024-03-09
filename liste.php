<?php include("Controleur/Fonction.php"); ?>
<?php

if (isset($_POST["phrase"])) {
    $phrase = $_POST["phrase"];
        insererPhrase($phrase); 
        header("location:liste.php");
}    
?>

<?php
    if (isset($_POST["supprimer"])){
        //suprimer un input
        $id = $_POST['id'];
        supprimerLigne($id);

    }else if (isset($_POST["enregistrer"])){
        //Enregistrer l'input modifier 
        if(isset($_POST["phrase"])){
            $id = $_POST['id'];
            $phrase = $_POST["phrase"];
            supprimerLigne($id);
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/style.css">
    <script type="text/javascript" src="src/script.js" defer ></script>
    <title>TODOList</title>
</head>
<body class="flexibility1  Espacementtop couleurdefond">
    <div class="container flexibility1" style="gap: 4%;">
        <form  action="" method="post" class="flexibility dimension">
            <input type="text" class="search_bar largeurform" name="phrase" required style="font-size: 25px;height: 55%; " >
            <button type="submit" class="boutton dimensionBoutton bleu"><img src="./src/images/plus2.png" alt=" search image"></button>
        </form>
        <?php 
            $reponse = afficherSaisie();
            while($donnees = $reponse->fetch()) {
        ?>
        <form action="" method="post" class="saisie flexrow largeursaisie" style=" margin-top: 1%;">
        <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">
            <div class="largeursaisie paragraphe">
                <input class="search_bar largeursaisie " type="text" disabled value="<?php echo $donnees['phrase'] ?>" name="phrase" id="saisie" style="font-size: 18px;padding: 8px; text-align: justify;align-self: flex-end; background-color: yellow;height: 30%; width: 97%;">
                <div class="date" style="position: absolute;bottom: 0;right: 0; padding:5px;"><?php echo $donnees['ladate'] ?></div>
            </div>
            <button onclick="modifier(event)"  class="dimensionBoutton blanc" id="iconModifier" > <img src="./src/images/modifier1.png" alt="Modifier" >  </button>
            <button type="submit" class="dimensionBoutton blanc dnone" name="enregistrer"  id="iconSave"><img src="./src/images/save.png" alt="Save" ></button>
            <button  class="dimensionBoutton blanc" name="supprimer" id="iconDelete" type="submit">      <img src="./src/images/delete.jpeg"  alt="Supprimer"></button>
        </form>
        <a href="liste.php?id=<?php echo $donnees['id']; ?>"></a>
        <?php        
            }
        ?>
    </div>
</body>
</html>