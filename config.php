<?php 
define('DBHost', 'localhost');
define('DBPort', '3306');
define('DBName', 'db_puff');
define('DBUser', 'root');
define('DBPassword', '');
require (__DIR__."\PDO.class.php");
$DB = new Db(DBHost,DBPort,DBName,DBUser,DBPassword);
?>