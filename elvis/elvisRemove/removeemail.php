<html>
 <head>
  <title>Make me Elvis - Hiqe emailin</title>
   <link rel = "stylesheet" type = "text/css" href = "style.css"/>
 </head>
 <body>
 <?php
 $dbc = mysqli_connect('localhost', 'elmer', 'mbreti','elvis_store')
 or die('Error connecting to MySQL server.');
 
 $email = $_POST['email'];
 
 $query = "DELETE FROM email_list WHERE email = '$email'";
 
 mysqli_query($dbc, $query)
or die('Gabim gjate ekzekutimit te query-it.');

echo 'Klienti u hoq: ' . $email;

mysqli_close($dbc); 
 ?>
 </body>
 </html>