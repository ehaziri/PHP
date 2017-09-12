<html>
<head>
  <title>Make me Elvis - Dergo emailin</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
  <img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />
  <p><strong>Private:</strong>Te perdoret vetem nga Elmeri<br />
  Shkruaj dhe dergo email te anetaret e listes se emailave.</p>

<?php
  $subject = "";
  $text = "";

  if (isset($_POST['Submit'])) {
        $from = 'elmer@makemeelvis.com';
        $subject = $_POST['subject'];
        $text = $_POST['elvismail'];
        $output_form = false;

        if (empty($subject) && empty($text)) {
          // E dime se edhe subjekti edhe teksti jane bosh
          echo 'E keni harruar subjektin dhe tekstin e emailit.<br />';
          $output_form = true;
        }

        if (empty($subject) && (!empty($text))) {
          echo 'E keni harruar subjektin e emailit.<br />';
          $output_form = true;
        }

        if ((!empty($subject)) && empty($text)) {
          echo 'E keni harruar tekstin e emailit.<br />';
          $output_form = true;
        }
  }
  else {
    $output_form = true;
  }

  if ((!empty($subject)) && (!empty($text))) {
    $dbc = mysqli_connect('localhost', 'elmer', 'mbreti', 'elvis_store')
      or die('Gabim gjate lidhjes me serverin MySQL.');

    $query = "SELECT * FROM email_list";
    $result = mysqli_query($dbc, $query)
      or die('Gabim gjate ekzekutimit te query-it.');

    while ($row = mysqli_fetch_array($result)){
      $to = $row['email'];
      $first_name = $row['first_name'];
      $last_name = $row['last_name'];
      $msg = "Dear $first_name $last_name,\n$text";
      mail($to, $subject, $msg, 'From:' . $from);
      echo 'Email sent to: ' . $to . '<br />';
    }

    mysqli_close($dbc);
  }

  if ($output_form)
  {
?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="subject">Tema e emailit(Subjekti):</label><br />
    <input id="subject" name="subject" type="text" value="<?php echo $subject; ?>" size="30" /><br />
    <label for="elvismail">Teksti (body) i emailit:</label><br />
    <textarea id="elvismail" name="elvismail" rows="8" cols="40"><?php echo $text; ?></textarea><br />
    <input type="submit" name="Submit" value="Dergo" />
  </form>

<?php
  }
?>

</body>
</html>
