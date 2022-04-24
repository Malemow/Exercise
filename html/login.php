<?php

require_once ('./config.php');


$Username = $_POST["username"];
$Password = $_POST["password"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    try {
        //輸入指令到MySQL資料庫內

        $sql = "SELECT * FROM users WHERE username = '". $Username."'";
        
        $stl  = $conn -> query($sql);

        $check = $stl->rowCount();

        //提取使用者資料陣列

        $user_array = $stl -> fetch();

        //提取密碼

        $check_Password = ($user_array['password']);
        
        //提取users_id

        $users_id = ($user_array['users_id']);

        //提取store表單所有資料

        $sql = "SELECT * FROM store";

        $stl = $conn -> query($sql);

        while ($store_array = $stl -> fetch()) {
            //提取store_id
            $store_id[]       = ($store_array['store_id']);
            //提取name
            $store_name[]     = ($store_array['name']);
            //提取price
            $store_price[]    = ($store_array['price']);
            //提取time
            $store_time[]     = ($store_array['time']);
            //提取store_users_id (foreign key)
            $store_users_id[] = ($store_array['users_id']);        
        }

        $store_check = $stl ->rowCount();

        $sql = "SELECT * FROM `users` WHERE `users_id` = '".$store_users_id[0] . "'";

        $stl = $conn->query($sql);

        $store_users_id = $stl ->fetch();

        $store_users_id = ($store_users_id['username']);

        if ($check == 1 && $Password == $check_Password ) {
            
            session_start();

            //將驗證機制改為 true
            
            $_SESSION['loggedin'] = true;
            
            //將抓取到的users資料存取入session伺服器
            $_SESSION['users_id'] = $users_id;
            $_SESSION['username'] = $Username;
            
            //將抓取到的store資料存取入session伺服器
            $_SESSION['store_id']       = $store_id;
            $_SESSION['store_name']     = $store_name;
            $_SESSION['store_price']    = $store_price;
            $_SESSION['store_time']     = $store_time;
            $_SESSION['store_users_id'] = $store_users_id;
            $_SESSION['store_check']    = $store_check;

            //跳轉頁面

            header("location:welcome.php");
        }else {

            function_alert("帳號或密碼錯誤");
        }
        

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}else {
    function_alert("有什麼東西錯了"); 
}
$conn = null;

function function_alert($message) { 
    
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 

    return false;
}

?>
<!DOCTYPE html>
    <html>
        <head>

            <meta charset = "UTF-8"/>

            <link rel     = "stylesheet" href = "./css/indeox.css"/>

        </head>
        <body>

        </body>
    </html>