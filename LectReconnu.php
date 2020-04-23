
            ----SAIDI Souad---OUHMOUD Hayat-----                    

/// L' affichage si Lecteur est bien authentifie
<?php
              
  	   	    echo" Le lecteur n° ".$_SESSION['numL']." est reconnu";
      	     	  echo"<h4>Voici la liste des ouvrages  disponibles à la réservation.</h4>";
      	 	  echo"<table border=2 width=60%>";
      	 	  echo "<tr style=\"color:red\"><th >CodeLivre</th><th>NomAuteur</th><th>PrenomAuteur</th><th>Titre</th><th>Categorie</th><th>ISBN</th><th></th></tr>";
      	 	 while($T=$sql2->fetch())
      	 	 	 {
      	 	 	 	if($T[6]==0)
      	 	 	 	{
      	 	 	 	echo"<tr><td>$T[0]</td><td>$T[1]</td><td>$T[2]</td><td>$T[3]</td><td>$T[4]</td><td>$T[5]</td>
                                <td><a href=\"Reserve.php?code=$T[0]&nom=$T[1]&pre=$T[2]&t=$T[3]&C=$T[4]&is=$T[5]\">Reserver</a></td></tr>";
      	 	 	    }
      	 	 	 }
      	 	 	 $sql2->closeCursor(); 
      	 	  echo"</table >";
      	 	     echo"<h4>Voici la liste de vos réservation.</h4>";
      	 	     echo"<table border=2 width=60%>";
                 echo "<tr style=\"color:red\"><th >CodeLivre</th><th>NomAuteur</th><th>PrenomAuteur</th><th>Titre</th><th>Categorie</th><th>ISBN</th></tr>";
                  
?>