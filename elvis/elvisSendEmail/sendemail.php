<html>
 <head>
  <title>Make me Elvis - Dergo emailin</title>
   <link rel = "stylesheet" type = "text/css" href = "style.css"/>
 </head>
 <body>
 <?php
 $from = 'elmer@makemeelvis.com';
 $subject = $_POST['subject'];
 $text = $_POST['elvismail'];
 
 $dbc = mysqli_connect('localhost','elmer','mbreti', 'elvis_store')
 or die('Gabim gjate lidhjes me serverin MySQL.');
 
 $query = "SELECT * FROM email_list";
 $result = mysqli_query($dbc, $query)
 or die('Gabim gjate ekzekutimit te query-it.');
 
 while($row = mysqli_fetch_array($result))
 {
	  $to = $row['email'];
	  $first_name = $row['first_name'];
	  $last_name = $row['last_name'];
	  $msg = "I/e dashur $first_name $last_name, \n$text";
	  mail($to, $subject, $msg, 'From: ' . $from);
	  echo 'Emaili eshte derguar te: ' . $to. '<br />';
 }

  mysqli_close($dbc);
 ?>
 </body>
 </html>