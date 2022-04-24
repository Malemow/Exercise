<?php

require_once ('./config.php');


$Username = $_POST["username"];
$Password = $_POST["password"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    try {
        $sql = "SELECT * FROM users WHERE username ='". $Username."'";
        
        $stl  = $conn -> query($sql);

        $check = $stl->rowCount();
        
        $check_Password = $stl->fetch();

        $check_Password = ($check_Password['password']);

        if ($check == 1 && $Password == $check_Password ) {
            
            session_start();
            
            $_SESSION["loggedin"] = true;
            
            $_SESSION["users_id"] = $user_ID;
            $_SESSION["username"] = $user_name;

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

            <meta charset="UTF-8"/>

            <link rel="stylesheet" href="./css/color.css"/>

        </head>
        <body>

        </body>
    </html>