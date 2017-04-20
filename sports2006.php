<!DOCTYPE html>
<html>
<head>
  <title>Виды спорта</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  $cnct = @mysql_connect("mysql.hostinger.co.uk", "u551990000_user", "123456");
  $dbselect = mysql_select_db("u551990000_2006");
  mysql_set_charset("utf8");

  $query = "SELECT * FROM sports";
  $result = mysql_query($query) or die(mysql_error());

  echo '<h1>Виды спорта:</h1>';

  while ($row = mysql_fetch_array($result))
  {
      echo '<ul><li><b>'.$row[1].'</li></ul></td>';
  }
  ?>
  <a href="menu2006.php"><button type="button" name="button">Назад</button></a>
</body>
</html>
