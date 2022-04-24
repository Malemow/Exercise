<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">

        <meta name = "viewport"   content = "widgt-davice-width , inital-scale=1.0"/>
        <link rel  = "stylesheet" href = "./css/indeox.css"/>
        <link rel  = "stylesheet" href = "./js/test.js"/>

        <title>註冊頁面</title>
        <script type="text/javascript" src="./js/check.js"></script>
    </head>
    <body>
        <form name = "registerForm" class = "bd_color" action = "ok.php" method = "POST" onsubmit = "return validateForm()">
            <h1>Login 註冊</h1>
            <input type = "text"     name = "username" placeholder = "使用者名稱" oninput = "ValidateValue(this)" />
            <br/>
            <input type = "password" name = "password" placeholder = "密碼"      oninput = "ValidateValue(this)" />
            <br/>
            <input type = "password" name = "password_check" id = "password_check" placeholder = "確認密碼" oninput = "ValidateValue(this)" />
            <br/>
            <input type = "submit"   name = "submit"   value = "註冊"/>
            <br/>
            <a href = "./index.php"  class = "hyperlink">登入頁面</a>
        </form>
        <div>
        </div>
    </body>
</html>