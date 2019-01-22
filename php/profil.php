<?php
                    #####Page Profil#####

////  j' 'invoque' la SESSION
session_start();
?>

<!DOCTYPE html>

<!-- mise en page -->
<html>
<head>
  <meta charset="utf-8">
  <link href="../css/test.css" rel="stylesheet" type="text/css" />
<!--  titre de la PAGE  -->
  <title> Profil </title>

<!--lien vers mise en forme de la page-->
  <link href="css/test.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1 align="center">Accueil</h1>

<!--création de la page profil-->
</body>
    <div align="center">

<!-- lien pour la deconnexion-->
      <p align="right"><a href="deconnexion.php">Se déconnecter</a></p>

<!--affichage d'un avatar -->
      <img src="../images/avatar/avatar.png"/>

<!--Récupération des données utilisteurs et affichage de celles-ci-->

      <p class="donnees"><?php echo 'Bienvenue '.$_SESSION['login'].'<br>Heureux de vous revoir!<br>';
               echo $_SESSION['prenom'].'     '.$_SESSION['nom'];
          ?>
      </p>


    </div>
</html>
