<?php
require_once ('./config.php');


$name  = $_POST['commodity_name'];

$price = $_POST['commodity_price'];


session_start();


$user_name = $_SESSION['users_id'];


if($_SERVER["REQUEST_METHOD"] == "POST"){

    try {
        $sql = "INSERT INTO `store`(`name`, `price`,`users_id`)VALUES('".
        $name ."'," . $price . "," . $user_name . ")";

        var_dump($stl);
        
        $stl = $conn -> query($sql);

        var_dump($stl);

        echo "<h1 style='color: white'>商品上架成功!,3秒後將自動跳轉頁面</h1>";

        header("location:welcome.php");

        exit;
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}else {
    function_alert("有什麼東西錯了"); 
}