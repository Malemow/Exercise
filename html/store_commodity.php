<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="widgt-davice-width , inital-scale=1.0"/>
        <link rel="stylesheet" href="./css/store_commodity.css"/>

        <title></title>
        <script type="text/javascript" src="./js/check.js"></script>
    </head>
    <body>
        <form action = "./store_commodity.php" method = "POST"   class = "bd_color">
            <h1>商品 登錄</h1>
            <input type = "text"   name = "store_name"  placeholder = "商品名稱" oninput = "ValidateValue(this)"/>
            <br/>
            <input type = "text"   name = "store_price" placeholder = "商品價格"      oninput = "ValidateValue(this)"/>
            <br/>
            <input type = "submit" name = "submit"   value = "登錄" >
            <br/>
            <a href = "./welcome.php" class = "hyperlink">回首頁</a>
        </form>
    </body>
</html>