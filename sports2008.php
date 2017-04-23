<!DOCTYPE html>
<html>
<head>
  <title>Виды спорта</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="background3">
  <?php
  $cnct = @mysql_connect("mysql.hostinger.co.uk", "u551990000_user1", "123456");
  $dbselect = mysql_select_db("u551990000_2008");
  mysql_set_charset("utf8");

  $query = "SELECT * FROM sports";
  $result = mysql_query($query) or die(mysql_error());

  echo '<center>';
  echo '<h1>Виды спорта:</h1>';
  echo '<table class = "table_dark"><caption></caption><tr><th><b>Вид спорта:</b></th></tr>';
	echo '</center>';

  while ($row = mysql_fetch_array($result))
  {
      echo '<tr align="center"><td><b>'.$row[1].'</b></td>';
  }
  ?>
  <a  href="menu2008.php" class="button_2"><span>←</span>Назад</a>
</body>
</html>
