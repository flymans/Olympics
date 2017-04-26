<!DOCTYPE html>
<html>
<head>
  <title>Поиск спортсмена</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="background3">
  <br>
  <form action="find_athletes2008.php" method="post">
  <center>
    <aside>

    <input type="text" name="Name" placeholder="Введите имя/фамилию">
    <select name="Country">
    <option value="">Выберите страну...</option>
    <option value="Австралия">Австралия</option>
    <option value="Россия">Россия</option>
    <option value="Соединенные штаты">Соединенные штаты</option>
    <option value="Великобритания">Великобритания</option>
    <option value="Китай">Китай</option>
  </select>
    <select name="Sport">
    <option value="">Выберите спорт...</option>
    <option value="Плавание">Плавание</option>
    <option value="Водное поло">Водное поло</option>
    <option value="Биатлон">Фехтование</option>
    <option value="Лыжные гонки">Академическая гребля</option>
    <option value="Волейбол">Волейбол</option>
    <option value="Лёгкая атлетика">Лёгкая атлетика</option>
    <option value="Гимнастика">Гимнастика</option>
    <option value="Гребля на байдарках и каноэ">Гребля на байдарках и каноэ</option>
    <option value="Стрельба">Стрельба</option>
    <option value="Велоспорт">Велоспорт</option>
    <option value="Бокс">Бокс</option>
    <option value="Футбол">Футбол</option>
    <option value="Синхронное плавание">Синхронное плавание</option>
    <option value="Прыжки в воду">Прыжки в воду</option>
    <option value="Хоккей на траве">Хоккей на траве</option>
    <option value="Софтбол">Софтбол</option>
    <option value="Современное пятиборье">Современное пятиборье</option>
    <option value="Гандбол">Гандбол</option>
    <option value="Парусный спорт">Парусный спорт</option>
    <option value="Стрельба из лука">Стрельба из лука</option>
    <option value="Баскетбол">Баскетбол</option>
    <option value="Конный спорт">Конный спорт</option>
    <option value="Бейсбол">Бейсбол</option>
    <option value="Теннис">Теннис</option>
    <option value="Бадминтон">Бадминтон</option>
    <option value="Тяжёлая атлетика">Тяжёлая атлетика</option>
    <option value="Тхэквондо">Тхэквондо</option>
    <option value="Триатлон">Триатлон</option>
    <option value="Настольный теннис">Настольный теннис</option>
    </select>
  </aside>
</center>
      <a class="button_2" ><span>✔</span><input class="input_button_2" type="submit" name="find" value="Найти"></a><br>
  </form>
  <?php
  include 'database2008.php';;
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

<a href="athletes2008.php" class="button_2"><span>←</span>Назад</a>
<a  href="index.php" class="button_2"><span>⌂</span>В главное меню</a>
  </center>
</body>
</html>
