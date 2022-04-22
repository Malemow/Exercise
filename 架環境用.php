<?php
/*require_once(載入檔案 要是失敗就停止網址所有動作) 
載入php來連結資料庫*/
require_once ('./conn.php');

//建立資料庫

if(!isset($_POST['submit'])){
  //如果沒有表單提交，顯示一個表單
?>
  <form action="" method="post">
    <h2>環境變數</h2>
    <input type="text" name="conn"  placeholder = "請輸入資料庫"    value="conn"/>
    <input type="text" name="table" placeholder = "請輸入表單"      value="table" />
    <br/>
    <br/>
    <input ty   pe="text" name="data_1" placeholder = "請輸入資料欄位1" value="name"  />
    <input type="text" name="data_2" placeholder = "請輸入資料欄位2" value="price" />
    <br/>
    <br/>
    <p>##欄位不能空的,不能為數字</p>
    <h2>輸入商品名稱 , 商品價格</h2>
    <label>請輸入名稱</label>
    <input type="text" name="name"  placeholder = "請輸入商品名稱"/>
    <br/>
    <label>請輸入價格</label>
    <input type="number" name="price" placeholder = "請輸入商品價格"/>
    <input type="submit" name="submit" value="送出">
  </form>
  <?php
  }else{
    try {
      try {
        $conn = new PDO("mysql:host=$host", $user , $password,$options);
        
      } catch (PDOException $e) {  
        
        echo $e->getMessage();
      }
      //建立資料庫

      $conn_1 = "`".$_POST ['conn'   ]."`";
      $conn_2 = $_POST ['conn'   ];
      $table  = "`".$_POST ['table'  ]."`";
      $data_1 = "`".$_POST ['data_1' ]."`";
      $data_2 = "`".$_POST ['data_2' ]."`";

      $name   = "'" . $_POST ['name'] . "'";
      $price  = $_POST ['price'  ];

      $sql    = "CREATE DATABASE " . $conn_1;
      
      $stl    = $conn->query($sql);

      $conn   = null;
        //建立表格
        try {
          $conn = new PDO("mysql:host=$host;dbname=$conn_2", $user , $password,$options);

          $sql   = "CREATE TABLE " . $table ."(
          `id` int AUTO_INCREMENT PRIMARY KEY,".
          $data_1  . " VARCHAR(10),".
          $data_2  . " int ) ";

          echo $sql;

          $stl   = $conn->query($sql);
          
          //增加資料
          $sql   = "INSERT INTO " . $table . "(" .
          $data_1 . "," . $data_2 . ")" . "VALUES (" .
          $name . "," . $price  . ")"  ;

          echo '<br/>';

          $stl   = $conn->query($sql);
           

          $conn  = null;

        } catch (PDOException $e) 
        {  
          
          echo $e->getMessage();
        }     
    }   
      //要是讀取失敗 印出錯誤資訊
      catch (PDOException $e) {

      echo $e->getMessage();
    }
}
$conn = NULL;
    
?>
<a href=http://192.168.0.234>回首頁</a>