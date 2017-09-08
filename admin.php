<?php
if(!empty($_COOKIE["admin"]))
$kul_ad=$_COOKIE["admin"];
else
die("Lutfen Giris Yapiniz!");?>
<?php
include 'mysql.php';
print ('<table border="0" align="left">
<tr><td>Hosgeldin&nbsp'.$kul_ad.'</td><td><a href="cikis.php">
<button type="button">Cikis</button></a></td></tr></table><br><br>');
?>
<center>
<br><br><h2>Yeni Ogretmen Kaydi</h2>
<table>
<form action="admin.php" method="post">
<input type="hidden" name="kayit" value="1"/>
<tr><td>Ad :</td><td><input type="text" name="ad" <?php if(!empty($_POST["ad"])) echo 'value="'.$_POST["ad"].'"'; ?>/></td></tr>
<tr><td>Kullanici Adi :</td><td><input type="text" name="kul_ad" <?php if(!empty($_POST["kul_ad"])) echo 'value="'.$_POST["kul_ad"].'"'; ?>/></td></tr>
<tr><td>Sifre :</td><td><input type="password" name="kul_pass" <?php if(!empty($_POST["kul_pass"])) echo 'value="'.$_POST["kul_pass"].'"'; ?>/></td></tr>
<tr><td>Sifre Tekrar :</td><td><input type="password" name="kul_pass2" <?php if(!empty($_POST["kul_pass2"])) echo 'value="'.$_POST["kul_pass2"].'"'; ?>/></td></tr>
</table>
<tr><td><input type="submit" value="Kayit Ol"/></td></tr>
</form><br><b>
<?php
if(!empty($_POST["kayit"]) && $_POST["kayit"]==1){
if(empty($_POST["ad"]))
{echo 'Adinizi giriniz!';}
else if(empty($_POST["kul_ad"]))
{echo 'kullanici adi giriniz!';}
else if(empty($_POST['kul_pass']))
{echo 'sifre giriniz';}
else if(empty($_POST['kul_pass2']))
{echo 'tekrar sifre giriniz';}
else{
$a=$_POST["kul_ad"];
if(!ctype_alnum($a))
{echo 'Kullanici adi icin sadece rakamlar ve harfler!'; exit;}
if($_POST["kul_pass"]!=$_POST["kul_pass2"])
{echo 'Girdiginiz 2 sifre uyusmuyor!'; exit;}
$b=$_POST["kul_pass"];
if(!ctype_alnum($b))
{echo 'Sifre icin sadece rakamlar ve harfler!'; exit;}
$c=$_POST["ad"];
if(!ctype_alnum($c))
{echo 'Adiniz icin sadece Harfler!'; exit;}

$sorgu="INSERT INTO ogretmenler(kuladi,sifre,adsoyad) VALUES ('".$a."','".$b."','".$c."');";
include 'mysql.php';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!<br>'.mysql_error(); exit;}
else{header('Location: admin.php?a=321');}
}
}
?>
<?php
if(!empty($_GET['a'])){
if($_GET['a']==321){echo 'Kayit Basarili!';}
}
?>


