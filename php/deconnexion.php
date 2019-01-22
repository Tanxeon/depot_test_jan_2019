                                      ####PAGE DE DECONNEXION####


<?php
//Si l'utilisteur a décidé de se déconnecter il sera redirigé vers page de login
session_start();
$_SESSION = array();
session_destroy();
header("Location: ../index.php");

?>
