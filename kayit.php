<?php
if(!empty($_POST["kayit"]) && $_POST["kayit"]==1){
if(empty($_POST["ad"]))
{echo 'Adinizi giriniz!';}
else if(empty($_POST["soyad"]))
{echo 'Soyadinizi giriniz!';}
else if(empty($_POST["kul_ad"]))
{echo 'kullanici adi giriniz!';}
else if(empty($_POST['kul_pass']))
{echo 'sifre giriniz';}
else if(empty($_POST['kul_pass2']))
{echo 'tekrar sifre giriniz';}
else if(empty($_POST['kul_mail']))
{echo 'email giriniz';}
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
$d=$_POST["soyad"];
if(!ctype_alnum($d))
{echo 'Soyadiniz icin sadece rakamlar ve harfler!'; exit;}
$e=$_POST["kul_mail"];
if(!ereg("^[A-Za-z0-9\.|-|_]*[@]{1}[A-Za-z0-9\.|-|_]*[.]{1}[a-z]{2,5}$",$e))
{echo 'Hatali mail adresi'; exit;}
$sorgu="INSERT INTO uyeler(kuladi,sifre,ad,soyad,email) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."');";
include 'mysql.php';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!<br>'.mysql_error(); exit;}
else{header('Location: index.php?a=321');}
}
}
?>
<center>
<br><br><h2>Ogrenci Kayit</h2>
<table>
<form action="kayit.php" method="post">
<input type="hidden" name="kayit" value="1"/>
<tr><td>Ad :</td><td><input type="text" name="ad" <?php if(!empty($_POST["ad"])) echo 'value="'.$_POST["ad"].'"'; ?>/></td></tr>
<tr><td>Soyad :</td><td><input type="text" name="soyad" <?php if(!empty($_POST["soyad"])) echo 'value="'.$_POST["soyad"].'"'; ?>/></td></tr>
<tr><td>Kullanici Adi :</td><td><input type="text" name="kul_ad" <?php if(!empty($_POST["kul_ad"])) echo 'value="'.$_POST["kul_ad"].'"'; ?>/></td></tr>
<tr><td>Sifre :</td><td><input type="password" name="kul_pass" <?php if(!empty($_POST["kul_pass"])) echo 'value="'.$_POST["kul_pass"].'"'; ?>/></td></tr>
<tr><td>Sifre Tekrar :</td><td><input type="password" name="kul_pass2" <?php if(!empty($_POST["kul_pass2"])) echo 'value="'.$_POST["kul_pass2"].'"'; ?>/></td></tr>
<tr><td>E-mail :</td><td><input type="text" name="kul_mail" <?php if(!empty($_POST["kul_mail"])) echo 'value="'.$_POST["kul_mail"].'"'; ?>/></td></tr>
</table>
<tr><td><input type="submit" value="Kayit Ol"/></td></tr>
</form>

