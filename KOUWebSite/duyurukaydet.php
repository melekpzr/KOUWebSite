<?php include("C:\wamp64\www\kousite\includes\config.php"); 
 
 $baslik=$_POST["baslik"];
 $metin=$_POST["metin"];
 
 if ($baslik=="" || $metin =="" )
 { echo"lütfen ilgili alanı bos bırakmayınız"; }
 else{ $ekle= mysql_query("insert into duyurular (duyuruadi,duyuruicerik) values('$baslik','$metin')"); 
 if($ekle){ echo"kayit basarılı"; }
 else{ echo"kayit basarısız"; } }
 ?>