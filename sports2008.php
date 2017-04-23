<!DOCTYPE html>
<html>
<head>
  <title>Виды спорта</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-size: cover"class="background2">
  <?php
  $cnct = @mysql_connect("mysql.hostinger.co.uk", "u551990000_user1", "123456");
  $dbselect = mysql_select_db("u551990000_2008");
  mysql_set_charset("utf8");

  $query = "SELECT * FROM sports";
  $result = mysql_query($query) or die(mysql_error());

  echo '<h1>Виды спорта:</h1>';

  while ($row = mysql_fetch_array($result))
  {
      echo '<ul><li><b>'.$row[1].'</li></ul></td>';
  }
  ?>
  <a  href="menu2008.php" class="button12"><span>←</span>Назад</a>
</body>
</html>
