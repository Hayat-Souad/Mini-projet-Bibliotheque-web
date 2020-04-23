               
             -----SAIDI Souad----OUHMOUD Hayat-----

  // Raserve un livre : 
<?php
session_start();
        // requperer les ariable dans l'URL:
      if(! isset($_SESSION['Coodelivre'])) $_SESSION['Coodelivre']="";
      $code=$_GET['code'];
      $n=$_GET['nom'];
      $p=$_GET['pre'];
      $t=$_GET['t'];
      $C=$_GET['C'];
      $Is=$_GET['is'];
      $_SESSION['Coodelivre']=$_SESSION['Coodelivre']."/".$code;
      echo"<h1>Réserver un livre</h1><br><br>";
      echo"Vous désirez réserver le livre suivant : <br><br><br>";
      echo"<table border=2  width=30%>";
      echo"<tr><td style=\"color:red\">CodeLivre</td><td>$code</td></tr>";
      echo"<tr><td style=\"color:red\">NomAuteur</td><td>$n</td></tr>";
      echo"<tr><td style=\"color:red\">PrenomAuteur</td><td>$p</td></tr>";
      echo"<tr><td style=\"color:red\">Titre</td><td>$t</td></tr>";
      echo"<tr><td style=\"color:red\">Categorie</td><td>$C</td></tr>";
      echo"<tr><td style=\"color:red\">ISBN</td><td>$Is</td></tr>";
      echo"</table>";
      echo'<form action="Confirmation.php" method="post"><input type="submit"  name="Con" value="Confirmer" style="position:relative;top:30px;left:120px;"></form>';
      try {
         include'ConnBD.php'; // Connect a la base 
         $sql = "UPDATE livres SET livdejareserve=1 WHERE livcode='$code'"; 
             $conn->query($sql);
         }catch( SQLException $e){  $e->getMessage();}	
?>