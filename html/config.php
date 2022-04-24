<?php
    $options = [

    //設定PDO長短連接 false為短連接
    PDO::ATTR_PERSISTENT => false,
    //將報錯設定改為 PDO::ERRMODE_EXCEPTION: 主動丟擲 exceptions 異常，需要以try{}cath(){}輸出錯誤資訊。
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //預防wab_server去解析一串SQL , 把設定改為MySQL去解析
    PDO::ATTR_EMULATE_PREPARES => false,
    //將字串符改為UTF-8
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'];

    $host     = 'localhost';
    $port     = '3306';
    $user     = 'lemow';
    $password = '0000';
    $dbname   = 'exercise_2';

    try {
       $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port",$user ,$password, $options);}

    catch (PDOException $e) {
        
        echo $e->getMessage();
    }
?>
