<!DOCTYPE html>
<html>
<head>
  <title>Участники Олимпийских игр 2008</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body style="background-color:#dee1e5">
  <center><h1>Список участников:</h1></center>
  <form style="float:left" method="POST">
    <input style="background-color:#6495ED" class="button1" type="submit" name="sort_by_name" value="Сортировка по имени" /><br>
    <input style="background-color:#6495ED"class="button1" type="submit" name="sort_by_medals" value="Сортировка по медалям" /><br>
    <input style="background-color:#6495ED" class="button1" type="submit" name="sort_by_country" value="Сортировка по стране" /><br>
</form>
<center>  <a href="athletes2008.php" class="button"><span>←</span>Назад</a></center>
  <?php
  $cnct = @mysql_connect("mysql.hostinger.co.uk", "u551990000_user1", "123456");
  $dbselect = mysql_select_db("u551990000_2008");
  mysql_set_charset("utf8");

  $query = "SELECT * FROM athletes ORDER BY gold desc, silver desc, bronze desc";
  $result = mysql_query($query) or die(mysql_error());

  echo '<center>';
  echo '<table border="1"><caption></caption><tr><th><b>Имя</b></th><th><b>Страна</b></th><th><b>Вид спорта</b></th><th><b>Золото</b></th><th><b>Серебро</b></th><th><b>Бронза</b></th></tr>';
	echo '</center>';
  if( isset( $_POST['sort_by_country'] ) )
  {
    $query3 = "SELECT * FROM athletes ORDER BY country";
      $result3 = mysql_query($query3) or die(mysql_error());

      while ($row = mysql_fetch_array($result3))
      {
        echo '<tr align="center"><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td>';
      }

      exit;
  }


    if( isset( $_POST['sort_by_name'] ) )
    {
        $query1 = "SELECT * FROM athletes ORDER BY name";
        $result1 = mysql_query($query1) or die(mysql_error());

        while ($row = mysql_fetch_array($result1))
        {
          echo '<tr align="center"><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td>';
        }
        exit;
    }
    if( isset( $_POST['sort_by_medals'] ) )
    {
        $query2 = "SELECT * FROM athletes ORDER BY gold desc, silver desc, bronze desc";
        $result2 = mysql_query($query2) or die(mysql_error());

        while ($row = mysql_fetch_array($result2))
        {
          echo '<tr align="center"><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td>';
        }
        exit;
    }

  while ($row = mysql_fetch_array($result))
  {
    echo '<tr align="center"><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td>';
  }
  ?>

</body>
</html>
