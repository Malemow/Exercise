<?php
require_once ('./test2.php');

try {
  $conn = new PDO("mysql:host=$host;", $user , $password,$options);

  $sql = 'SHOW DATABASES';
  
  $i = $conn->query($sql);

  $class = $i->fetch();

  print_r ($class);
  

} catch (PDOException $e) {
  echo $e->getMessage();
  
}
?>