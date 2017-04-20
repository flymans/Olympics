<!DOCTYPE html>
<html>
<head>
  <title>Добавление спортсмена</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Добавить спортсмена:</h1>
  <form action="add_athletes2006.php" method="post">
    ФИО:<br>
    <input type="text" name="Name" value=""><br>
    Страна:<br>
    <input type="text" name="Country" value=""><br>
    Вид спорта:<br>
    <input type="text" name="Sport" value=""><br>
    Количество золота:<br>
    <input type="number"  name="Gold" value=""><br>
    Количество серебра:<br>
    <input type="number"  name="Silver" value=""><br>
    Количество бронзы:<br>
    <input type="number"  name="Bronze" value=""><br>
    <input type="submit" name="add" value="Добавить">
  </form>
  <?php
  $cnct = @mysql_connect("mysql.hostinger.co.uk", "u551990000_user", "123456");
  $dbselect = mysql_select_db("u551990000_2006");
  mysql_set_charset("utf8");

  if (!$cnct || !$dbselect) {
    mysql_error();
  }

  if (isset($_POST['add'])) {
    $name = strip_tags(trim($_POST['Name']));
    $country = strip_tags(trim($_POST['Country']));
    $sport= strip_tags(trim($_POST['Sport']));
    $gold = strip_tags(trim($_POST['Gold']));
    $silver = strip_tags(trim($_POST['Silver']));
    $bronze = strip_tags(trim($_POST['Bronze']));
    $all = "INSERT INTO athletes (Name, Country, Sport, Gold, Silver, Bronze) VALUES ('$name', '$country', '$sport', '$gold', '$silver', '$bronze')";
    $result = mysql_query($all);
    mysql_close($cnct);
  }
  ?>
  <a href="athletes2006.php"><button type="button" name="button">Назад</button></a>
</body>
</html>
