<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="widgt-davice-width , inital-scale=1.0"/>
        <link rel="stylesheet" href="./css/color.css"/>

        <title>註冊頁面</title>
        <script>
        
        function validateForm() {

            var x = document.forms["registerForm"]["password"].value;
            var y = document.forms["registerForm"]["password_check"].value;

            if(x.length<6){
                alert("密碼長度不足6位");
                return false;
            }
            if (x != y) {
                alert("請確認密碼是否輸入正確");
                return false;
            }
        }
    </script>
    </head>
    <body>
        <form name="registerForm" class="bd_color" action="ok.php" method="POST" onsubmit="return validateForm()">
            <h1>Login 註冊</h1>
            <input type="text"     name="username" placeholder="使用者名稱"/>
            <br/>
            <input type="password" name="password" placeholder="密碼"/>
            <br/>
            <input type="password" name="password_check" id="password_check" placeholder="確認密碼">
            <br/>
            <input type="submit"   name="submit"   value="註冊" >
            <br/>
            <a href="./index.php" class="hyperlink">登入頁面</a>
        </form>
        <div>
        </div>
    </body>
</html>