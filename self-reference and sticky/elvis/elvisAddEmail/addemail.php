<html>
 <head>
  <title>Make me Elvis - Regjistroje emailin</title>
  <link rel = "stylesheet" type = "text/css" href = "style.css"/>
 </head>
 <body>
  <img src = "blankface.jpg" width = "161" height = "350" alt = ""
   style = "float:right" />
  <img name = "elvislogo" src = "elvislogo.gif" width = "229" height = "32"
  border = "0" alt="Make me Elvis" />
  <p> Shkruaje emrin, mbiemrin dhe emailin per t'u regjistruar ne listen e emailave
  <strong>Make me Elvis</strong></p>
 <?php
 $first_name = "";
 $last_name = "";
 $email = "";

 if (isset($_POST['Submit'])) {
     $first_name = $_POST['firstname'];
     $last_name = $_POST['lastname'];
     $email = $_POST['email'];
     $output_form = false;

     if (empty($first_name)) {
          echo 'E keni emrin.<br />';
          $output_form = true;
        }

     if (empty($last_name)) {
          echo 'E keni harruar mbiemrin.<br />';
          $output_form = true;
        }

     if (empty($email)) {
          echo 'E keni harruar emailin.<br />';
          $output_form = true;
        }
  }
  else {
    $output_form = true;
  }

  if ((!empty($first_name)) && (!empty($last_name)) && (!empty($email)))
	  {
  		 $dbc = mysqli_connect('localhost','elmer','mbreti', 'elvis_store')
  		 or die ('Gabim gjate lidhjes me serverin MySQL.');
  		 $query = "INSERT INTO email_list(first_name, last_name, email)" .
  		 "VALUES('$first_name', '$last_name', '$email')";

  		 mysqli_query($dbc, $query)
  		 or die('Gabim gjate dergimit te query-it ne baze.');

  		 echo 'Klienti u regjistrua';

  		 mysqli_close($dbc);

     }

  if ($output_form)
  {
?>
 <form method = "post"  action = "<?php echo $_SERVER['PHP_SELF']; ?>">
 <label for "firstname"> Emri:</label>
 <input type = "text" id = "firstname" name = "firstname" value="<?php echo $first_name; ?>"/> <br />
 <label for "lastname"> Mbiemri:</label>
 <input type = "text" id = "lastname" name = "lastname" value="<?php echo $last_name; ?>"/> <br />
 <label for "email"> Emaili:</label>
 <input type = "text" id = "email" name = "email" value="<?php echo $email; ?>"/> <br />
 <input type = "submit" name = "Submit" value = "Dergo" /> <br />
 </form>
<?php
  }
?>
 </body>
</html>
