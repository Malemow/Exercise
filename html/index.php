<?php
    //session_start 告訴html網址session開始了
    session_start();
 
    // Check if the user is already logged in, if yes then redirect him to welcome page

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        header("location: welcome.php");
        
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">

            <meta name="viewport" content="widgt-davice-width , inital-scale=1.0"/>
            <link rel="stylesheet" href="./css/color.css"/>

            <title>登錄系統首頁</title>
        </head>
        <body>
            <form action="./login.php" method="POST" class="bd_color">
                <h1>Login 登陸</h1>
                <input type="text" name="username" placeholder="使用者名稱"/>
                <br/>
                <input type="password" name="password" placeholder="密碼"/>
                <br/>
                <input type="submit" name="submit" value="登入" >
                <br/>
                <a href="./registar.php" class="hyperlink">如果沒帳號的話請點這註冊</a>
            </form>
            <div>
            </div>
        </body>
    </html>