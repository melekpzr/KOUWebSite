<?php
include("C:\wamp64\www\kousite\includes\config.php");
## mysql_query();
## mysql_fetch_array();

$m = mysql_query("select * from duyuru order by duyurutarih DESC");

$i=0;
while($kayit = mysql_fetch_array($m)){
	$dAdi[$i] = $kayit['duyuruadi'];
$dIcerik[$i] =$kayit['duyuruicerik'];
$dtarih[$i] = $kayit['duyurutarih'];

	
	
	$i=$i+1;
	
	}



?>