<!DOCTYPE html>
<html>
<head>
  <title>Виды спорта</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="background3">
  <?php
  include 'database2006.php';

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
  <a  href="menu2006.php" class="button"><span>←</span>Назад</a>
</body>
</html>
