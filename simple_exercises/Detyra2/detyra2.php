<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Shuma</title>
</head>
<body>
  <h2>Detyra 2</h2>

  <?php

  if(isset($_POST['submit'])){
	$numri = $_POST['numri'];

	$output_form = false;
	if(empty($numri)){
		echo 'Shkruani numrin e fundit te shumes.<br />';
		$output_form = true;
    }
	else{
	  $i=1;
	  $s=0;
	  while($i <= $numri){
		 $s += $i;
		 $i++;;
	  }
	  echo $s;
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
