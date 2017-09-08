<?php
if(!empty($_COOKIE["ogrenci"]))
header('Location: ogrenci.php');
if(!empty($_COOKIE["ogretmen"]))
header('Location: soru_ekleme.php');
if(!empty($_GET['a'])){
if($_GET['a']==123){echo 'Hatali giris yaptiniz!!!';}
}?>
<table border="0">
<form action="admin_grs2.php" method="post">
<tr><td>Kullanici Adi:</td><td><input type="text" name="kul_ad"/></td></tr>
<tr><td>Sifre :</td><td><input type="password" name="kul_pass"/></td></tr>
</table>
<tr><td><input type="submit" value="Giris Yap"/></td></tr>
</form></table>