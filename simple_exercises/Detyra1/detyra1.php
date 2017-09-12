<html>
 <head>
  <title>Detyrat</title>
 </head>
 <body>
 <?php
  if(isset($_POST['submit'])){
	$gjatesia = $_POST['gjatesia'];

	if(empty($gjatesia)){
		echo 'Paraprakisht eshte kerkuar nje vlere per gjatesine e vijes horizontale.';
    }
	else{
	  echo '<hr style="width:'. $gjatesia . 'px">';
   }
  }
 ?>
 </body>
</html>
