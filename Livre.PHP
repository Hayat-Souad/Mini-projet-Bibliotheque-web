
          -----SAIDI Souad----OUHMOUD Hayat----

// Formulaire de enregistre un livre :
<!DOCTYPE html>
<html>
<head> 
	 <title> </title>
	 <style type="text/css">
    
	 	label {
	 		   color:#383838;
	 	}
	 </style>
</head>
<body>
	 <h1 align="center" >Enregistrement d'un livre </h1>
 <form action="validlivre.php" method="post">
  <table  align="center" cellpadding="7px">
  	 <tr>
  	 	<td><label>Nom de l'auteur    :</label></td>
  	 	<td><input type="text" name="nom" required></td>
  	 </tr>
  	  <tr>
  	 	<td><label>Prenom de l'auteur  :</label></td>
  	 	<td><input type="text" name="prenom" required></td>
  	 </tr>
  	  <tr>
  	 	<td><label>Titre           :</label></td>
  	 	<td><input type="text" name="titre" required></td>
  	 </tr>
  	  <tr>
  	 	<td><label>Catégorie  :</label></td>
  	 	<td><select name="ctg">
  	 		  <option>Roman</option>
  	 		  <option>Science-fiction</option>
  	 		  <option>Junior</option>
  	 		  <option>Policier</option>
  	 		</select>
  	 	</td>
  	 </tr>
  	  <tr>
  	 	<td><label>Numéro ISBN :</label></td>
  	 	<td><input type="text" name="num" required></td>
  	 </tr>
      
  	 <tr>
       <td ><input type="submit" name="enrg"  value="Enregistrer" style="background-color:grey; position: relative;left: 115%;"></td>
      </tr>
  </table>
</form>
</body>
</html>
