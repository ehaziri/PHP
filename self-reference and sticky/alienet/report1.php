<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Raportoje rrembimin</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Me kane rrembyer alienet - Raportoje rrembimin</h2>

  <p>Tregoje rrefimin tend te rrembimit nga alienet:</p>
  
  <?php
  $first_name = "";
  $last_name = "";
  $name = "";
  $when_it_happened = "";
  $how_long = "";
  $how_many = "";
  $alien_description = "";
  $what_they_did = "";
  $fang_spotted = "";
  $email = "";
  $other = "";
  
  if(isset($_POST['submit'])){
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $name = $_POST['firstname']. ' ' . $_POST['lastname'];
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $alien_description = $_POST['aliendescription'];
  $what_they_did = $_POST['whattheydid'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];
  
  $output_form = false;
  if(empty($first_name) || empty($last_name)){
	  echo 'Plotesoni emrin tuaj te plote.<br />';
	  $output_form = true;
  }
  
   if(empty($when_it_happened)){
	  echo 'Plotesoni fushen: Kur ka ndodhur rrembimi?<br />';
	  $output_form = true;
  }
  
    if(empty($how_long)){
	  echo 'Plotesoni fushen: Sa kohe keni qene atje?<br />';
	  $output_form = true;
  }
  
     if(empty($how_many)){
	  echo 'Plotesoni fushen: Sa aliene i keni pare?<br />';
	  $output_form = true;
  }
  
     if(empty($fang_spotted)){
	  echo 'Plotesoni fushen: A e keni pare qenin Fang?<br />';
	  $output_form = true;
  }
 }
 else{
	 $output_form = true;
 }
  if((!empty($name)) && (!empty($when_it_happened)) && (!empty($how_long)) && (!empty($how_many)) && (!empty($fang_spotted))){
  //Pjesa per lidhjen PHP me MySQL
   
  $dbc = mysqli_connect('localhost', 'koder', '123456', 'aliendatabase')
  or die('Gabim gjate lidhjes me serverin MySQL');
  
  $query = "INSERT INTO aliens_abduction(first_name, last_name, " .
  "when_it_happened, how_long, how_many, alien_description, " .
  "what_they_did, fang_spotted, other, email)".
  "VALUES ('$first_name', '$last_name', '$when_it_happened', '$how_long', ".
  "'$how_many', '$alien_description', '$what_they_did', '$fang_spotted', " .
  "'$other', '$email')";
  
  $result = mysqli_query($dbc, $query)
  or die('Gabim gjate dergimit te query-t ne baze te shenimeve');
  
  mysqli_close($dbc);
  
  echo 'Te dhenat u regjistruan ne databaze.<br />';
  echo 'Falemnderit per plotesimin e formes.<br />';
  echo 'Ju jeni rrembyer ' . $when_it_happened;
  echo ' dhe munguat ' . $how_long . '<br />';
  echo 'Numri i alieneve: ' . $how_many . '<br />';
  echo 'Pershkruani ata: ' . $alien_description . '<br />';
  echo 'Alienet e bene kete: ' . $what_they_did . '<br />';
  echo 'A ishte Fangu aty? ' . $fang_spotted . '<br />';
  echo 'Komente te tjera: ' . $other . '<br />';
  echo 'Emaili juaj eshte ' . $email;
 }
 
 if($output_form)
 {
?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="firstname">Emri:</label>
    <input type="text" id="firstname" name="firstname" value="<?php echo $first_name; ?>" /><br />
    <label for="lastname">Mbiemri:</label>
    <input type="text" id="lastname" name="lastname" value="<?php echo $last_name; ?>" /><br />
    <label for="email">Si e keni emailin?</label>
    <input type="text" id="email" name="email" value="<?php echo $email; ?>"/><br />
    <label for="whenithappened">Kur ka ndodhur rrembimi?</label>
    <input type="text" id="whenithappened" name="whenithappened" value="<?php echo $when_it_happened; ?>" /><br />
    <label for="howlong">Sa kohe keni qene atje?</label>
    <input type="text" id="howlong" name="howlong" value="<?php echo $how_long; ?>" /><br />
    <label for="howmany">Sa aliene i keni pare?</label>
    <input type="text" id="howmany" name="howmany" value="<?php echo $how_many; ?>" /><br />
    <label for="aliendescription">Pershkruani ata:</label>
    <input type="text" id="aliendescription" name="aliendescription" value="<?php echo $alien_description; ?>" size="32" /><br />
    <label for="whattheydid">Cka ju kane bere?</label>
    <input type="text" id="whattheydid" name="whattheydid" value="<?php echo $what_they_did; ?>" size="32" /><br />
    <label for="fangspotted">A e keni pare qenin Fang?</label>
    Po <input id="fangspotted" name="fangspotted" type="radio" value="po" />
    Jo <input id="fangspotted" name="fangspotted" type="radio" value="jo" /><br />
    <img src="fang.jpg" width="100" height="175"
      alt="Fangu qeni im i rrembyer." /><br />
    <label for="other">Dicka tjeter qe doni te shtoni?</label>
    <textarea id="other" name="other"><?php echo $other; ?></textarea><br />
    <input type="submit" value="Raportoje rrembimin" name="submit" />
  </form>
 <?php
  }
?>
</body>
</html>
