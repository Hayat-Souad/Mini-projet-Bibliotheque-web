             
                -----SAIDI Souad--OUHMOUD Hayat---

  // GESTION DE LECTEUR :

<?php
 session_start();
    $faux=1; $valide=0;
try{
         include'ConnBD.php';// Connection a la base donnees
     $sql=$conn->query("SELECT lecnum,lecnom,lecmotdepasse FROM lecteurs" );
     $sql2=$conn->query("SELECT * from  livres");
   if(!isset($_SESSION['numL']))// Si lecteur authentifier 
     { 	
          if(($_POST['nom']=='Admin') && ($_POST['pass']=='Admin'))// Authentification d'Admin Pour faire gestion Livre (ajout ou supprimer)
             { 
       	       include'GestionLivre.php'; 
             }
          else 
            { 
    	           echo '<h1>Gestion du lecteur</h1>';
                   while($Tab=$sql->fetch())
                   {
        	           if($Tab[1]!=$_POST['nom'] || $Tab[2]!=$_POST['pass'])
                                         { $faux=0;}
                          else 
         	               {  $valide=1; $_SESSION['numL']=$Tab[0]; }
                   }
                  $sql->closeCursor();	
                 if($faux==0 && $valide==0)
  	 	   {  
  	 	  	 echo "<span style=\"position:relative;left:100px;\">Le lecteur n'est pas reconnu</span>";
  	         echo "<span style=\"position:relative;left:100px;\"><br>Cliquez <a href=\" authentiflecteur.php\">ici</a> pour tenter une nouvelle identification</span> ";
  	         echo "<br><br><br><span style=\"position:relative;left:100px;\">Si vous êtes un nouveau lecteur veuillez vous enregistrez en remplissant le formulaire ci-dessous : </span>";
  	         include 'enregistrelecteur.php';
  	            }
  	         if( $valide==1)
  	               {include'LectReconnu.php';} 
  	   }
      }
   else // dija authentifie et reserve et il retourne ala pade des ouvrage disponible :
      {             echo '<h1>Gestion du lecteur</h1>';
  	     	$tab_code=explode("/",$_SESSION['Coodelivre']);

  	     	include 'LectReconnu.php';

  	        for($i=1;$i<count($tab_code);$i++)
  	     	 {     
  	     	     $sql3="SELECT * from  livres where livcode ='$tab_code[$i]'";
                     $result=$conn->query($sql3);

                     $T1=$result->fetch();
                     echo"<tr><td>$T1[0]</td><td>$T1[1]</td><td>$T1[2]</td><td>$T1[3]</td><td>$T1[4]</td><td>$T1[5]</td></tr>";
                     $result->closeCursor();
                  }
               echo"</table>";         
       }

 }catch( SQLException $e){  $e->getMessage();}	 
  	   $conn=null;
   
?>