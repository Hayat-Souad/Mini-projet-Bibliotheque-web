       
              ----SAIDI Souad----OUHMOUD Hayat-----

 /// Supprimer un livre dans la bibloiteque:
<?php
$no="";
 if(isset($_POST['sup']))
 {
 	 $ISBN=$_POST['ISBN'];
 	 $exist=0;
 	 
    try {
          include'ConnBD.php';
  	      $sql="SELECT livISBN FROM livres";
  	      $result=$conn->query($sql);
  	   while($test=$result->fetch())
            { if($ISBN==$test['livISBN'])
                {$exist=1;}
            }
        if($exist==1)
          {  $conn->exec("DELETE FROM livres WHERE livISBN='$ISBN' ");
             $no="<br><br><span style=\"color:green;\"><b>Ce livre a été supprimé !</b></span>";
          }else {
          $no="<br><br><span style=\"color:red;\"><b>Ce livre n'existe pas !</b></span>";
          } 	
       }catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();}
  	$conn=null;
}
 ?>
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
	 <h1 align="center" >Suppression d'un livre </h1>
 <form action="" method="post">
  <table  align="center" cellpadding="7px">
  	 <tr>
  	 	<td><label>Numéro ISBN du livre :</label></td>
  	 	<td><input type="text" name="ISBN" required></td>
  	 </tr>
  	  <tr>
  	  	 <tr>
       <td ><input type="submit" name="sup"  value="Supprimer" style="background-color:grey; position: relative;left: 115%;"></td>
      </tr>
      <tr><td> <br><br><?php  echo "$no";?></td></tr>
      <tr><td> <br><br><?php  echo "<a href='GestionLivre.php' >Retourne </a>"?></td></tr>
  </table>
</form>
</body>
</html>