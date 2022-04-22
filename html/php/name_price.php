<?php
require_once ('./conn.php');

if (!isset($_POST['submit'])) {
   //如果沒有表單提交，顯示一個表單
?>
  <form action="" method="post">
    <h2 class=white>輸入商品名稱 , 商品價格</h2>
    <label class=white>請輸入名稱</label>
    <input type="text"   name="name"    placeholder = "請輸入商品名稱"/>
    <br/>
    <br/>
    <label class=white>請輸入價格</label>
    <input type="number" name="price"   placeholder = "請輸入商品價格"/>
    <br/>
    <br/>
    <input type="submit" name="submit"  value="送出">
  </form><?php
  }else {
    try {
      $PDO = new PDO("mysql:host=$host;dbname=conn", $user , $password,$options);

      $name  = "'" . $_POST['name'] . "'" ;
      $price = $_POST['price'];
      
      $sql = "INSERT INTO `class`(`name`,`price`) VALUES(".
             $name . "," . $price . ")";
      
      $stl = $PDO->query($sql);


    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  
  $conn = null;
  ?><!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8"/>
      <meta name=”viewport” content=”width-device-width, initial-scale=1.0” />
  
      <link rel="stylesheet" href="../css/php.css"/>   
      <link rel="stylesheet" href="../css/number.css"/> 
            
      <title>輸入商品,價格頁面</title>
    </head>
    <body>
    <a href = "http://192.168.0.234">首頁</a>
    <bt/>
    <bt/>
    <a href = "./name_price.php">重新整理</a>
    </body>
  </html>
  
  
  
  