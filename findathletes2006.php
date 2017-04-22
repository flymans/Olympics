
<!DOCTYPE html>
<html>
<head>
  <title>Поиск спортсмена</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body class="olympq">
  <form action="findathletes2006.php" method="post">
    <input type="text" name="Name" placeholder="Введите имя/фамилию">
      <a style="width:160px"class="button4"><span style="width:50px">✔</span><input  type="submit" name="find" value="Найти"></a><br>
  </form>
  <?php
  $cnct = @mysql_connect("localhost", "root");
  $dbselect = mysql_select_db("olympic_games_2006");
  mysql_set_charset("utf8");
  echo '<center>';
  echo '<table border="1"><caption></caption><tr><th><b>Имя</b></th><th><b>Страна</b></th><th><b>Вид спорта</b></th><th><b>Золото</b></th><th><b>Серебро</b></th><th><b>Бронза</b></th></tr>';
  echo '</center>';

  if( isset( $_POST['find'] ) )
  {
    $name = strip_tags(trim($_POST['Name']));
    $query = "SELECT * FROM athletes where Name like '%$name%'";
      $result = mysql_query($query) or die(mysql_error());

      while ($row = mysql_fetch_array($result))
      {
        echo '<tr align="center"><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td>';
      }

      exit;
}
  ?>

<a href="menu2006.php" class="button"><span>←</span>Назад</a>
<a  href="index.php" class="button4"><span>⌂</span>В главное меню</a>
  </center>
</body>
</html>
