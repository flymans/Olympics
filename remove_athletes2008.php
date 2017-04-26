<!DOCTYPE html>
<html>
<head>
  <title>Удаление спортсмена</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class = "background2">
  <center><h1>Удалить спортсмена:</h1>
  Выберите спортсмена на удаление:
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
  <select name="items[]" multiple="multiple" size=10>
</center>
  <?php
  include 'database2008.php';;

  $query = "SELECT * FROM athletes";
  $result = mysql_query($query) or die(mysql_error());

  while ($row = mysql_fetch_object($result)) {
    echo '<option value="'.  $row->Athlete_id . '">'. $row->Name . ", ". $row->Country . ", ". $row->Sport . ", ". $row->Gold . ", ". $row->Silver .  ", ". $row->Bronze . '</option>';
  }
  echo '</select><br><input class="button2"" type="submit" value="Удалить"/>  <INPUT class = "button2" TYPE="button" onClick="history.go(0)" VALUE="Обновить"><br>';

  if (isset($_POST['items']))
  {
    $items = $_POST['items'];

    foreach ($items as $t){
      $query ="DELETE FROM athletes WHERE Athlete_id=$t";
      mysql_query($query) or die(mysql_error());
      echo '<i> Спортсмен под номером <b>'.$t.'</b> был удален.</i> <br />';
    }

    mysql_close();
  }
  ?>
    <a href="athletes2008.php" class="button_2"><span>←</span>Назад</a>
</body>
</html>
