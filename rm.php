<?php
$value = $_POST['change'];
$length = $value - 1;
$array = array();
if (isset($value)) {
  $array = unserialize(file_get_contents('test.txt'));
  array_splice($array, $length, 1);
  file_put_contents('test.txt', serialize($array));
}
header('location:education.php');
?>
