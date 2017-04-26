<!DOCTYPE html>
<html>
<head>
  <title>Участники Олимпийских игр 2006</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="background3">
  <?php
  include 'database2006.php';

  $query = "SELECT * FROM countries order by gold desc, silver desc, bronze desc";
  $result = mysql_query($query) or die(mysql_error());

  echo '<center>';
  echo '<h1>Страны:</h1>';
  echo '<table class = "table_dark"><caption></caption><tr><th><b>Страна</b></th><th><b>Золото</b></th><th><b>Серебро</b></th><th><b>Бронза</b></th></tr>';
	echo '</center>';

  while ($row = mysql_fetch_array($result))
  {
      echo '<tr align="center"><td><b>'.$row[1].'</b></td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td>';
  }
  ?>
    <a href="menu2006.php" class="button"><span>←</span>Назад</a>
</body>
</html>
