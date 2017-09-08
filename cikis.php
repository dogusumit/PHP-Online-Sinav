<?php 
setcookie("ogrenci","",time()-3600);
setcookie("ogretmen","",time()-3600);
setcookie("admin","",time()-3600);
echo 'basariyla cikis yapildi';
header("Refresh:2 ; index.php");
?>