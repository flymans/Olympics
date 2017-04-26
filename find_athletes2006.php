<!DOCTYPE html>
<html>
<head>
  <title>Поиск спортсмена</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="background3">
  <br>
  <form action="find_athletes2006.php" method="post">
<center>
    <aside>

    <input type="text" name="Name" placeholder="Введите имя/фамилию">
    <select name="Country">
    <option value="">Выберите страну...</option>
    <option value="Канада">Канада</option>
    <option value="Россия">Россия</option>
    <option value="Соединенные штаты">Соединенные штаты</option>
    <option value="Германия">Германия</option>
    <option value="Австрия">Австрия</option>
  </select>
    <select name="Sport">
    <option value="">Выберите спорт...</option>
    <option value="Конькобежный спорт">Конькобежный спорт</option>
    <option value="Санный спорт">Санный спорт</option>
    <option value="Биатлон">Биатлон</option>
    <option value="Лыжные гонки">Лыжные гонки</option>
    <option value="Горнолыжный спорт">Горнолыжный спорт</option>
    <option value="Бобслей">Бобслей</option>
    <option value="Керлинг">Керлинг</option>
    <option value="Хоккей">Хоккей</option>
    <option value="Фигурное катание">Фигурное катание</option>
    </select>
  </aside>
</center>
      <a class="button" ><span>✔</span><input class="input_button" type="submit" name="find" value="Найти"></a><br>
  </form>
  <?php
  include 'database2006.php';
  echo '<center>';
  echo '<table class="table_dark"><caption></caption><tr><th><b>Имя</b></th><th><b>Страна</b></th><th><b>Вид спорта</b></th><th><b>Золото</b></th><th><b>Серебро</b></th><th><b>Бронза</b></th></tr>';
  echo '</center>';

  if( isset( $_POST['find'] ) )
  {
    $name = strip_tags(trim($_POST['Name']));
    $country = strip_tags(trim($_POST['Country']));
    $sport = strip_tags(trim($_POST['Sport']));
    $query = "SELECT * FROM athletes where Name like '%$name%' and Country like '%$country%' and Sport like '%$sport%'" ;
      $result = mysql_query($query) or die(mysql_error());

      while ($row = mysql_fetch_array($result))
      {
        echo '<tr align="center"><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td>';
      }

}
  ?>

<a href="athletes2006.php" class="button"><span>←</span>Назад</a>
<a  href="index.php" class="button"><span>⌂</span>В главное меню</a>
  </center>
</body>
</html>
