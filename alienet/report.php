<!DOCTYPE html>
<html>
<head>
  <title>Me kane rrembyer alienet - Raportoje rrembimin</title>
</head>
<body>
  <h2>Me kane rrembyer alienet - Raportoje rrembimin</h2>
  
<?php
  //$name = $_POST['firstname']. ' ' . $_POST['lastname'];
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $alien_description = $_POST['aliendescription'];
  $what_they_did = $_POST['whattheydid'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];
  /*
  //1Pjesa per dergim te emailit
  $to = 'eg7070@gmail.com';
  $subject = 'Me kane rrembyer alienet - Raportoje rrembimin';
  $msg = "$name eshte rrembyer $when_it_happened dhe mungoi per $how_long.\n" .
    "Numri i alieneve: $how_many\n" .
    "Pershkrimi i alieneve: $alien_description\n" .
    "Cka bene ata: $what_they_did\n" .
    "U verejt Fang-u: $fang_spotted\n" .
    "Komente tjera: $other";
  //ini_set();
  //mail($to, $subject, $msg, 'From:' . $email);
  
  //1Pjesa
  */
  //2Pjesa per lidhjen PHP me MySQL
   
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
  //2Pjesa 
  echo 'Falemnderit per plotesimin e formes.<br />';
  echo 'Ju jeni rrembyer ' . $when_it_happened;
  echo ' dhe munguat ' . $how_long . '<br />';
  echo 'Numri i alieneve: ' . $how_many . '<br />';
  echo 'Pershkruani ata: ' . $alien_description . '<br />';
  echo 'Alienet e bene kete: ' . $what_they_did . '<br />';
  echo 'A ishte Fangu aty? ' . $fang_spotted . '<br />';
  echo 'Komente te tjera: ' . $other . '<br />';
  echo 'Emaili juaj eshte ' . $email;
?>

</body>
</html>
