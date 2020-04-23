

     -----SAIDI Souad----OUHMOUD Hayat-----


// Valider un livre 
<?php
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $titre=$_POST['titre'];
   $ctg=$_POST['ctg'];
   $num=$_POST['num'];
   $code="";
   $exist=0; 
    function premier($string){
      $l=strlen($string);
      $rest=substr($string,0, -($l-2));
      return $rest;
    }
echo "<h1 align=\"center\"; >Validation d'un livre </h1>";
    
    	   try {
       include'ConnBD.php';// connect a la base 
  	 $sql="SELECT livISBN FROM livres";
  	 $result=$conn->query($sql);
  	 while($test=$result->fetch())
        { if($num==$test['livISBN'])
               {$exist=1;}
          }
        if($exist==1)
          { echo "<br><br><br><span style=\"position:relative;left:45%;\"><b>Ce livre existe déjà !</b></span>";
        }else {
           $code=premier($nom).premier($prenom).premier($ctg).substr($num, -2);// form un code livre 
        // insert dans la table livres :
       $conn->exec("INSERT INTO livres (livcode,livnomaut,livprenomaut,livtitre,livcategorie,livISBN) VALUES ('$code','$nom','$prenom','$titre','$ctg','$num')");
          echo "<br><br><table align=\"center\">";
          echo "<tr><td><b> Nom de l'auteur :</b></td><td style=\"color:green\"><b>$nom</b></td>";
          echo "<tr><td><b> Prénom de l'auteur :</b></td><td style=\"color:green\"><b>$prenom</b></td>";
          echo "<tr><td><b> Titre :</b></td><td  style=\"color:green\"><b>$titre</b></td>";
          echo "<tr><td><b> Catégorie :</b></td><td style=\"color:green\"><b>$ctg</b></td>";
          echo "<tr><td><b> Nunméro ISBN :</b></td><td style=\"color:green\"><b>$num</b></td>";
           echo"<tr><td> <br><br><a href='GestionLivre.php' >Retourne </a></td></tr>";
          echo "</table>";
        }
  	 	 
  	 	 }catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();}

  	 	
  	$conn=null;
   
  
?>