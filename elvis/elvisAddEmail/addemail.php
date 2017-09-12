<html>
 <head>
  <title>Make me Elvis - Regjistroje emailin</title>
   <link rel = "stylesheet" type = "text/css" href = "style.css"/>
 </head>
 <body>
 <?php
 $dbc = mysqli_connect('localhost','elmer','mbreti', 'elvis_store')
 or die ('Gabim gjate lidhjes me serverin MySQL.');
 
 $first_name = $_POST['firstname'];
 $last_name = $_POST['lastname'];
 $email = $_POST['email'];
 
 $query = "INSERT INTO email_list(first_name, last_name, email)" .
 "VALUES('$first_name', '$last_name', '$email')";
 
 mysqli_query($dbc, $query)
 or die('Gabim gjate dergimit te query-it ne baze.');
 
 echo 'Klienti u regjistrua';
 
 mysqli_close($dbc);
 
 ?>
 
 </body>
</html>