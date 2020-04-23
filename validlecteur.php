
              -----SAIDI Souad---OUHMOUD Hayat-----

  // Valider un lecteur :
<?php
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $adresse=$_POST['adresse'];
   $ville=$_POST['ville'];
   $postal=$_POST['postal'];
   $pass=$_POST['pass'];
   $code=$_POST['code'];
   $exist=0; 
echo "<h1 align=\"center\"; >Validation d'un lecteur </h1>";
    
    	   try {
           include'ConnBD.php';
         $sql="SELECT lecnum FROM lecteurs";
         $result=$conn->query($sql);
     while($test=$result->fetch())
        { if($code==$test['lecnum'])
               {$exist=1;}
          }
        if($exist==1)
          { echo "<br><br><br><span style=\"position:relative;left:45%;\"><b>Ce lecteur existe déjà dans la bibliothèque !</b></span>";
         
          }else{
            // insert dans la table lecteurs:
          $conn->exec("INSERT INTO lecteurs (lecnum,lecnom,lecprenom,lecadresse,lecville,leccodepostal,lecmotdepasse) VALUES ('$code','$nom','$prenom','$adresse','$ville','$postal','$pass')");
          echo "<br><br><table align=\"center\">";
          echo "<tr><td><b> Nom  :</b></td><td style=\"color:green\"><b>$nom</b></td>";
          echo "<tr><td><b> Prénom :</b></td><td style=\"color:green\"><b>$prenom</b></td>";
          echo "<tr><td><b> Adresse :</b></td><td style=\"color:green\"><b>$adresse</b></td>";
          echo "<tr><td><b> Ville :</b></td><td style=\"color:green\"><b>$ville</b></td>";
          echo "<tr><td><b> Code postal  :</b></td><td style=\"color:green\"><b>$postal</b></td>";
          echo "<tr><td><b> Mot de passe :</b></td><td style=\"color:green\"><b>$pass</b></td>";
          echo "</table>";
          echo "<br><br><span style=\"position:relative;left:35%;\">Vous êtes enregistré dans la base de la bibliothèque. </span>";
          echo "<br><span style=\"position:relative;left:35%;\">Vous avez maintenant la possibilité de réserver des livres en <a href=\"authentiflecteur.php\">vous identifiant ici.</a></span>";}
  	 	 
  	 	 }catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();}

  	 	
  	$conn=null;
   
  
?>