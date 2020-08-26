<?php
$array = array();
$new_edu = $_POST['edu'];
if(file_exists('test.txt')) {
  $array = unserialize(file_get_contents('test.txt'));
  array_push($array, $new_edu);
  file_put_contents('test.txt', serialize($array));
} else {
  array_push($array, $new_edu);
  file_put_contents('test.txt', serialize($array));
}
header('location:education.php');
?>
