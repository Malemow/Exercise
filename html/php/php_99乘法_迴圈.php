<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name=”viewport” content=”width-device-width, initial-scale=1.0” />

  <link rel="stylesheet" href="../css/php.css"/> 
  <link rel="stylesheet" href="../css/number.css"/> 
  
  <title>php_99乘法</title>

</head>
<body>
  <H1>使用迴圈的方式寫出99乘法表</H1>
  <br>
  <br>
  <div>
    <?php
    echo "<table width='800' border='1' bgcolor='white'>";
    for ($i = 1; $i <= 9; $i++) {
      echo "<tr>";
        for ($j = 1; $j<= 9; $j++) {
        echo "<td> {$i}x{$j}=" .($i*$j) ."</td>";
        }
      }
    echo "<a href='php_99乘法_迴圈.php' download>點此下載_php99乘法表</a>";
    echo "</table>";
    ?>
  </div>
  <br>
  <h1>輸入回傳值來寫出乘法表</h1>
  <?php
  $number1 = "";
  $number2 = "";
  ?>
  <form action="./php_99乘法_迴圈.php" method="post">
    <label for="ticketNum" class="white">左方數字:</label>
    <input type="number"  name="number1" oninput="if(value<0)value=0;if(value.length>2)value=value.slice(0,2);" style="width: 60px;">
    </br>
    <label for="ticketNum" class="white">右方數字:</label>
    <input type="number"  name="number2" oninput="if(value<0)value=0;if(value.length>2)value=value.slice(0,2);" style="width: 60px;">
    </br>
    <button type="submit"  >輸入</button>
    <button type="reset "  >重設</button>
    <P class="white">結果如下</P>
  </form>
  <?php
  if ($_POST['number1']) {
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
}
  ?>

<a href = "http://192.168.0.234" ; >首頁      </a>
<a href = "猜數字遊戲.php"         ;>猜數字遊戲  </a>
</body>
</html>