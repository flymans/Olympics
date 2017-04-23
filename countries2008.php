<!DOCTYPE html>
<html>
<head>
  <title>Участники Олимпийских игр 2008</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="background3">
  <?php
  $cnct = @mysql_connect("mysql.hostinger.co.uk", "u551990000_user1", "123456");
  $dbselect = mysql_select_db("u551990000_2008");
  mysql_set_charset("utf8");

  $query = "SELECT * FROM countries order by gold desc, silver desc, bronze desc";
  $result = mysql_query($query) or die(mysql_error());

  echo '<center>';
  echo '<h1>Страны:</h1>';
  echo '<table class="table_dark"><caption></caption><tr><th><b>Страна</b></th><th><b>Золото</b></th><th><b>Серебро</b></th><th><b>Бронза</b></th></tr>';
	echo '</center>';

  while ($row = mysql_fetch_array($result))
  {
      echo '<tr align="center"><td><b>'.$row[1].'</b></td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td>';
  }
  ?>
    <a href="menu2008.php" class="button_2"><span>←</span>Назад</a>
</body>
</html>
