<html>
 <head>
  <title>Make me Elvis - Hiqe emailin</title>
   <link rel = "stylesheet" type = "text/css" href = "style.css"/>
 </head>
 <body>
  <img src = "blankface.jpg" width = "161" height = "350" alt = ""
   style = "float:right" />
  <img name = "elvislogo" src = "elvislogo.gif" width = "229" height = "32"
  border = "0" alt="Make me Elvis" />
  <p>Shkruaje nje email-adrese per ta hequr.<br />
 <?php
 $email = "";

 if(isset($_POST['Remove'])){
  	 $email = $_POST['email'];
  	 $output_form = false;

  	 if(empty($email)){
  		 echo 'E keni harruar emailin.<br />';
  		 $output_form = true;
  	 }
 }

 else {
    $output_form = true;
  }

 if(!empty($email)){

	 $dbc = mysqli_connect('localhost', 'elmer', 'mbreti','elvis_store')
     or die('Error connecting to MySQL server.');


     $query = "DELETE FROM email_list WHERE email = '$email'";

     mysqli_query($dbc, $query)
     or die('Gabim gjate ekzekutimit te query-it.');

     echo 'Klienti u hoq: ' . $email;

     mysqli_close($dbc);
 }
 if($output_form){
 ?>
 <form method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <label for = "email">Email-adresa:</label><br />
   <input id = "email" name = "email" type = "text" value="<?php echo $email; ?>" size= "30"/> <br />
   <input type = "submit" name = "Remove" value = "Hiqe"/>
 </form>
 <?php
  }
?>
 </body>
 </html>
