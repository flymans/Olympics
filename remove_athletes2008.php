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
  $cnct = @mysql_connect("mysql.hostinger.co.uk", "u551990000_user1", "123456");
  $dbselect = mysql_select_db("u551990000_2008");
  mysql_set_charset("utf8");

  $query = "SELECT * FROM athletes";
  $result = mysql_query($query) or die(mysql_error());

  while ($row = mysql_fetch_object($result)) {
    echo '<option value="'.  $row->Athlete_id . '">'. $row->Name . ", ". $row->Country . ", ". $row->Sport . ", ". $row->Gold . ", ". $row->Silver .  ", ". $row->Bronze . '</option>';
  }
  echo '</select><br><input class="button9" style="width:9%;background-color:#6495ED;" type="submit" value="Удалить" /><INPUT class = "button9" TYPE="button" onClick="history.go(0)" VALUE="Обновить"><br>';

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
    <a href="athletes2008.php" class="button"><span>←</span>Назад</a>
</body>
</html>
