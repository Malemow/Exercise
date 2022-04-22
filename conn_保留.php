<?php

//設定一個群組 為 db
class db_conn{

  //開始設定各種函數

  public $options = [
    //設定PDO長短連接 false為短連接
    PDO::ATTR_PERSISTENT => false,
    //將報錯設定改為 PDO::ERRMODE_EXCEPTION: 主動丟擲 exceptions 異常，需要以try{}cath(){}輸出錯誤資訊。
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //預防wab_server去解析一串SQL , 把設定改為MySQL去解析
    PDO::ATTR_EMULATE_PREPARES => false,
    //將字串符改為UTF-8
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'];

  public $host     = 'localhost';
  public $port     = '3306';
  public $user     = 'lemow';
  public $password = '0000';

  //再給這些函數一個function 使--construct 傳入
  function __construct(){
    //將class的變數傳入 sql_connect
    $this -> sql_connect();
  }
  //寫一個function 將 sql)connect 加入進入資料庫(PDO)的函數
  function sql_connect(){
    return $conn = new PDO("mysql:host=$this->host;port=$this->port", $this->user , $this->password,$this->options);
  }
  public function query()
  {
    return $this->db_conn->query();
  }
  public function fetchAll()
  {
    return $this->db_conn->fetchAll();
  }


};


?>