
<?php
error_reporting(0);
$db_adres = "localhost";
$db_user = "root";
$db_pass = "";
$db_tablo = "kousiteproje";

$conn = mysql_connect($db_adres,$db_user,$db_pass) or die("Sunucuya Bağlantı Sağlamadı".mysql_error());

if(!$conn){
	die("Bağlantı Hatası".mysql_error());
}

$db_select=mysql_select_db($db_tablo,$conn);

if(!$db_select){
	die(" Database Bağlantı Hatası".mysql_error());
}

mysql_query("SET NAMES utf8");

session_start();

?>