<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Detyrat</title>
</head>
<body>
  <h2>Detyra 4</h2>

  <?php
  if(isset($_POST['submit'])){
    	$numri = $_POST['numri'];
    	$output_form = false;
    	if($numri > 10){
    		 echo '<a href="https://www.google.com">Google</a>';
    	  }
    	else{
    		 echo '<hr />';
    	   }
    	}
  else{
	   $output_form = true;
  }

  if($output_form)
  {
	?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="numri">Numri:</label>
			<input type="number" id="numri" name="numri" /><br />
			<input type="submit" value="Submit" name="submit" />
		</form>
    <?php
  }
 ?>
 </body>
</html>
