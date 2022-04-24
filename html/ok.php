<!DOCTYPE html>
<html>
    <head>
    <meta charset = "UTF-8">

        <meta name = "viewport"   content = "widgt-davice-width , inital-scale=1.0"/>
        <link rel  = "stylesheet" href    = "./css/color.css"/>

        <title>跳轉頁面</title>

    </head>
    <body style = "flex-direction: column;">

    </body>
</html>
<?php

require_once("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $Username = $_POST["username"];
    $Password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '" . $Username . "'";

    $stl = $conn -> query($sql);

    $check = $stl -> rowCount();
    
    if($check == 0){

        try {

            $sql = "INSERT INTO users (username,password)Values(" .
               "'" . $Username . "'," . "'" . $Password . "')";
               
            $stl = $conn -> query($sql); 

            echo "<h1 style='color: white'>註冊成功!3秒後將自動跳轉頁面</h1>";

            echo "<br/>";

            echo "<a href='index.php'>未成功跳轉頁面請點擊此</a>";

            header("refresh:3;url=index.php",true);

            exit;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }                              
    }else{

        echo "<h1 style='color: white'>該帳號已有人使用!,3秒後將自動跳轉頁面</h1>";

        echo "<br/>";

        echo "<a href='registar.php'>未成功跳轉頁面請點擊此</a>";

        
        header("refresh:3;url=index.php ",true);

        exit;
    }
}
$conn = null;

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    
    return false;
} 
?>