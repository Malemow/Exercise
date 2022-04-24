<?php

require_once('./config.php');

session_start();


$username = $_SESSION['username'];
$user_id  = $_SESSION['users_id'];

$store_id       = $_SESSION['store_id'];
$store_name     = $_SESSION['store_name'];
$store_price    = $_SESSION['store_price'];
$store_time     = $_SESSION['store_time'];
$store_users_id = $_SESSION['store_users_id'];
$store_check    = $_SESSION['store_check'];

?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">

            <meta name="viewport" content="widgt-davice-width , inital-scale=1.0"/>
            <link rel="stylesheet" href="./css/indeox.css"/>

            <title></title>
            <script type="text/javascript" src="./js/check.js"></script>
        </head>
        <body style = "flex-direction: column;">
            <div>
                <img src="./img/amazon.png" style="width: 200px;"/>

                <input type="buttin" onclick="location.href='./store_commodity.php'" value="登陸商品頁面" style="width: 100px;text-align: center ; cursor: pointer; " />
                <h1 style='color : white;'> 妳好 <?php echo $username; ?> </h1>
                <table width='800' border='1' bgcolor='white'>
                    <tr>
                        <td>商品名稱</td>
                        <td>商品價格</td>
                        <td>上架日期</td>
                        <td>上架者</td>
                    </tr>
                    <?php
                        $check = 0;

                        for ($i = 0 ; $i < $store_check ; $i++) {
                            echo "<tr>";
                            echo "<td>";  print_r($store_name [$check]);     echo "</td>";
                            echo "<td>";  print_r($store_price[$check]);     echo "</td>";
                            echo "<td>";  print_r($store_time [$check]);     echo "</td>";
                            echo "<td>";  print_r($store_users_id)     ;     echo "</td>";
                            echo "</tr>";
                            $check ++ ;
                        
                        ?> <?php } ?>
                </table>
                </br>
                </br>
                </br>
                <input type="buttin" onclick="location.href='./logout.php'" value="登出" style="width: 40px;text-align: center ; cursor: pointer;" />
                
            </div>
        </body>
    </html>
    <?php
/*  if ($_POST['number1']) {
    echo "<table width='800' border='1' bgcolor='white';>";
    for ($i = 1; $i <= $_POST['number1']; $i++) {
      echo "<tr>";
        for ($j = 1; $j<= $_POST['number2']; $j++) {
        echo "<td> {$i}x{$j}=" .($i*$j) ."</td>";
        }
      }
    echo "</table>";
    }
  else {
    echo "<p class='white'>請輸入文字</p>";
}*/
  ?>
