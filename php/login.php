<?php
                        #################################
                        #verification du login avec php#
                       #################################


                        /// Ouverture de session, récupération des données POST

session_start();

                        /// Je verifie que les champs sont bien remplis //
if( $_POST['login']== True && !empty($_POST['password']))
{
  $login=$_POST['login'];
  $password=$_POST['password'];

                      /// Connexion et vérification dans bdd
try{
  $bddphp = new PDO('mysql:host=localhost;dbname=bddphp;charset=utf8', 'bddphp', 'bddphp');
}

catch (Exception $e){
    $exit = False;  }

                      /// Requête vers la base de données
  $query = $bddphp->query('SELECT * FROM test_login');

                      /// Boucle de requêtes
    while($data = $query->fetch())
    {
                    /// verification mdp et login
      if($login == $data['login'] && $password == $data['password'])
      {
                    ///Obtention des valeurs et des clés dans bdd
        foreach($data as $key => $value)
        {
          $_SESSION[$key] = $value;
        }
                  /// je redirige vers la page profil si c'est bon
         header('location: profil.php');
         exit;
      }
      else
      {
                  ///On reste sur la page de connexion jusqu'à succés login
        //echo 'pseudo ou password incorrecte(s)<br> <a href="../index.php">Nouvelle tentative</a>';
        //exit;
        header('location: ../index.php');

      }
    }
}

            //message erreur et lien vers la page de connexion
else {



  echo 'Veuillez remplir tous les champs <br> <a href="../index.php">Nouvelle tentative</a>';
    }
?>
