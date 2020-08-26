<?php
function print_edu_name() {
  $array = array();
  $array = unserialize(file_get_contents('test.txt'));
  $a = 0;
  echo "<ul>";
  while ($a < count($array)) {
    echo "<li>".$array[$a]."</li>";
    $a += 1;
  }
  echo "</ul>";
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .add_edu {
        background-color: gray;
        padding: 10px;
        margin: 10px;
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
      }
    </style>
  </head>
  <body>
    <form class="" action="test.php" method="post">
      <div class="add_edu">
        <span>학력 추가</span>
        <input type="text" name="edu" value="">
        <input type="submit" name="" value="submit">
      </div>
    </form>
    <?php
    if (file_exists('test.txt')) {
      print_edu_name();
    } else {
      echo "학력을 입력하세요";
    } ?>
  </body>
</html>
