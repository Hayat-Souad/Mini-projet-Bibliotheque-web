
// Connect a la base donnes :
<?php
   $conn = new PDO("mysql:host=localhost;dbname=librairie","root","souad" );
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>