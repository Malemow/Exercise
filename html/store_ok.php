<?php
require_once ('./config.php');

try {

    $sql = "SELECT * FROM ";

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

    
} catch (PDOException $e) {
    echo $e ->getMessage();
}

