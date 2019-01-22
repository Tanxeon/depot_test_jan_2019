
<!DOCTYPE html>

            <!-- #########     page d'enregistrement    ########-->

<html>
<head>
  <meta charset="utf-8">
<!--titre de la page-->
  <title> Inscription </title>
  <link href="../css/test.css" rel="stylesheet" type="text/css" />
</head>


<body>
  <!--Accueil de l'utilisteur-->
  <h1>Enregistrer vous</h1>

  <!--Champs pour l'enregistrement de celui_ci-->
  <div class="enregistrement">
      <form action="php/register.php" method="post">
        <p class="login">
            <!--<label for="login">pseudo :</label>-->
            <input type="text" placeholder="login" required /><br>

            <!--<label for="password">Mot de passe :</label>-->
            <input type="password" placeholder="password" required />

            <!--<label for="Email">Email :</label>-->
            <input type="Email" placeholder="email"required />
        </p>
            <input type="submit" value="enregistrement">

            <!--lien vers la page de connexion-->
        <p>
                <a href="../index.php">Déjà inscrit?</a>
        </p>

    </form>
  </div>
</html>
