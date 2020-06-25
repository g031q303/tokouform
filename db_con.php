<?php
// 管理ページのログインパスワード
//define( 'KANRI', 'adminPassword');

// データベースの接続情報

define( 'hostname', 'localhost');
define( 'uname','g031q303');
define( 'pass','j2vcPFbyqE');
define( 'dbname' , 'g031q303');

$mysqli = new mysqli( 'hostname', 'uname', 'pass', 'dbname');

// 接続エラーの確認
   if( $mysqli->connect_errno ) {
      $error_message[] = '接続できませんでませんでした。 エラー番号 '.$mysqli->connect_errno.' : '.$mysqli->connect_error;
   }
   
?>