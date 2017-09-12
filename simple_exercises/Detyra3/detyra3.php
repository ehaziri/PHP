<html>
 <head>
  <title>Detyrat</title>
 </head>
 <body>
 <?php
  if(isset($_GET['submit'])){
	$ngjyra = $_GET['ngjyra'];

	if(empty($ngjyra)){
		echo 'Paraprakisht eshte kerkuar te perzgjedhni njeren nga ngjyrat ne listen renese.';
    }
	else{
	  echo '<body style="background-color: ' . $ngjyra . '"></body>';
   }
  }
 ?>
 </body>
</html>
