
<?php

 require_once("C:\wamp64\www\kousite\includes\config.php");

$username = $_POST{username};
$password = $_POST{password};

$sorgu = mysql_query("select * from uyeler where kul_adi = '$username' AND sifre = '$password'");
$sonuc = mysql_num_rows($sorgu);

if($sonuc == 0)
{
	header("location:sistemegiris.php");
	
	
}
else
{
	
	$_SESSION['uname'] = $username;
	header("location:duyuruekle.php");
}

?>