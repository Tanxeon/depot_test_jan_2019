<!DOCTYPE html>
        <!--                   PAGE DE LOGIN              -->


<html>
<head>
  <meta charset="utf-8">
  <!--titre de la page-->
  <title> TP enregistrement </title>
  <link href="css/test.css" rel="stylesheet" type="text/css" />
</head>


<body>
  <h1>TP PAGE DE CONNEXION</h1>

  <!--Champs de connexion de login-->
  <div class="enregistrement">

      <form action="php/login.php" method="post">
        <p class="login">

                  <!--<label for="nom">login :</label>-->
                  <input type="text" placeholder="login" name="login"  /><br>

                  <!--<label for="nom">Mot de passe:</label>-->
                  <input type="password" placeholder="password" name="password" />
        </p class="DECONNEXION">
                  <input  type="submit" class="champ" value="Connexion">


        <p>
                <a href="php/register.php">Inscrivez-vous ici?</a>
        </p>

    </form>
  </div>


</body>
</html>
