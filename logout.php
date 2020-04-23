
       ---SAIDI Souad ----OUHMOUD Hayat---

// Deconnecter  tout les variable session destroy 
<?php 
session_start();
session_unset(); 
session_destroy(); 
 include'authentiflecteur.php';// retoutne a la page principale .
?>