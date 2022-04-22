<?php
//empty 檢查此變數是否為空
if (empty($_COOKIE['rand']) || empty($_POST['answer'])) {
  
  $rand = rand(0,10);
//setcookie 將 變數放入前者cookie名稱
  setcookie('rand' , $rand);
} else {
  $ckeck = empty($_COOKIE['ckeck']) ? 0 : (int)$_COOKIE['ckeck'];
  //檢查你玩了幾次
  if ($ckeck<999) {
    //檢查是否答案正確
    $result = (int)$_POST['answer'] - (int)$_COOKIE['rand'];
    if ($result == 0){

      $message = '答對了';
      //將cookie裡的變數清除
      setcookie('rand');
      setcookie('ckeck');

    }elseif ($result >0) {
      $message = '太大了';
    }else {
      $message = '太小了';
    }
    //只要每跑一次就將檢查+1
    setcookie('ckeck',$ckeck + 1);
  }else {
    $message ='好扯';
    //將cookie裡的變數清除
    setcookie('rand');
    setcookie('ckeck' , 0);
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name=”viewport” content=”width-device-width, initial-scale=1.0” />

    <link rel="stylesheet" href="../css/php.css"/>   
    <link rel="stylesheet" href="../css/number.css"/> 
          
    <title>猜數字遊戲</title>
  </head>
  <body>
    <h1 style="font-size: 4em;">猜數字遊戲</h1>
    
    <h1>請輸入數字</h1>
    <!-- accept 把input的變數放進此path  method 型態可有get , post-->
    <form accept="猜數字遊戲.php" method="post">
      <input type="number" name="answer" placeholder="輸入1~10" oninput="if(value<0)value='';if(value>10)value='';">
      </br>
      <button type="submit" >猜猜看</button>
    </form>
  <!-- if判斷式寫在html可以用這種酷方式 -->
  <?php if (isset($message)): ?>
  <p class=white ><?php echo $message; ?></p>
  <?php endif ?>
  </br>
  </br>
  </br>
  <a href="http://192.168.0.234">首頁</a>
  <a href="php_99乘法_迴圈.php">九九乘法</a>
</body>
</html>