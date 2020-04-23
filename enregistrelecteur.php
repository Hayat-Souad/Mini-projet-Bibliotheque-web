
           ----SAIDI Souad---OUHMOUD Hayat----
//Enregistrer un lecteur:
<!DOCTYPE html>
<html>
  <head>
  	 <style >
      
     label {
	 		   color:#383838;
	 	}
	 	input[type=submit]{background-color:grey;}
    </style>
  </head>
  <body>
  	 <div id="enr">
     <h1 align="center">Enregistrement d'un lecteur </h1>
     <form method="post" action="validlecteur.php">
     <table align="center">
     	<tr>
       <td><label>Nom :</label></td>
       <td><input  type="text" name="nom" required></td>
        </tr>
        <tr>
       <td><label>Prénom :</label></td>
       <td><input  type="text" name="prenom" required></td>
        </tr>
        <tr>
       <td><label>Adresse :</label></td>
       <td> <input type="text" name="adresse" required></td>
       </tr>
       <tr>
       <td><label>Ville :</label></td>
       <td><input type="text" name="ville" required></td>
       </tr>
       <tr>
       <td><label>Code Postal :</label></td>
       <td><input type="text" name="postal" required></td>
       </tr>
       <tr>
       <td><label>Mot de passe :</label></td>
       <td><input type="password" name="pass" required></td>
       </tr>
        <tr>
       <td><label>Code qui vous identifie :</label></td>
       <td><input type="text" name="code" required></td>
       </tr>
      <tr>
      	<td>   </td>
      	<td><br><input type="submit" value="Enregistrer"></td></tr>
       </table>
     </form>
     </div>
    
  </body>
 </html>