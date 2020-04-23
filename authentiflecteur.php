
            -----SAIDI Souad----- OUHMOUD Hayat----
//page principale :
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset=UTF-8>
    <style >
      div{position: relative;left: 35%;}

    </style>
  </head>
  <body>
    <div id="aut">
     <h1>Authentification du lecteur </h1>
     <form method="post" action="Gestion.php">
     <table cellpadding="7">
     	<tr>
       <td><label>Nom du lecteur :</label></td>
       <td><input  type="text" name="nom"></td>
        </tr>
        <tr>
       <td><label>Mot de passe :</label></td>
       <td><input  type="password" name="pass" ></td>
        </tr>
      <tr>
        <td><input type="submit" value="Login"></td>
      </tr>
      <tr>
        <td colspan="2"> <p><b>Vous êtes nouveau !</b></p><a href="enregistrelecteur.php"><b>Veuillez vous enregistrer ici!</b></a></td>
      </tr>
       </table>
     </form>
     </div>