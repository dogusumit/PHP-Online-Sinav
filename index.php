<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Online Sinav Sistemi</title>
</head>
<body>
<table align="right" border="0">
<a href="admin_grs.php"><button type="button">Admin Login</button>
</a></table>
<center>
<h1>ONLİNE SINAV SİSTEMİ PROJESİ</h1>
<br><br>
<h2>Ogrenci Girisi</h2>
<?php
if(!empty($_COOKIE["ogrenci"]))
header('Location: ogrenci.php');
if(!empty($_COOKIE["ogretmen"]))
header('Location: ogretmen.php');
if(!empty($_GET['a'])){
if($_GET['a']==123){echo 'Hatali giris yaptiniz!!!';}
if($_GET['a']==321){echo '<b>Kayit Basarili, Giris Yapabilirsiniz</b>';}
}?>
<table border="0">
<form action="ogrnc_grs.php" method="post">
<tr><td>Kullanici Adi:</td><td><input type="text" name="kul_ad"/></td></tr>
<tr><td>Sifre :</td><td><input type="password" name="kul_pass"/></td></tr>
</table>
<tr><td><input type="submit" value="Giris Yap"/></td></tr>

</form>
<form action="kayit.php" method="post">
<tr><td><input type="submit" value="Kayit Ol"/></td></tr>
</form>
<br><br>
<h2>Ogretmen Girisi</h2>
<table>
<form action="ogrtmn_grs.php" method="post">
<tr><td>Kullanici Adi:</td><td><input type="text" name="kul_ad"/></td></tr>
<tr><td>Sifre :</td><td><input type="password" name="kul_pass"/></td></tr>
</table>
<tr><td><input type="submit" value="Giris Yap"/></td></tr>

</center>
</body>
</html>
