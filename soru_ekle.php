<?php
if(empty($_COOKIE["ogretmen"]))
die("Lutfen Giris Yapiniz!");
if(empty($_POST["soru"]))
{echo 'soru giriniz';}
else if(empty($_POST["c1"]))
{echo 'A sikkini giriniz!!';}
else if(empty($_POST["c2"]))
{echo 'B sikkini giriniz!!';}
else if(empty($_POST['c3']))
{echo 'C sikkini giriniz!!';}
else if(empty($_POST['c4']))
{echo 'D sikkini giriniz!!';}
else if(empty($_POST['c5']))
{echo 'E sikkini giriniz!!';}
else{
$ders=$_POST["ders"];
$soru=$_POST["soru"];
$a[0]=$_POST["c1"];
$a[1]=$_POST["c2"];
$a[2]=$_POST["c3"];
$a[3]=$_POST["c4"];
$a[4]=$_POST["c5"];
$dogru=$_POST["chk"];
$sorgu="INSERT INTO ".$ders."(soru,c1,c2,c3,c4,c5,dogru) VALUES ('".$soru."','".$a[0]."','".$a[1]."','".$a[2]."','".$a[3]."','".$a[4]."','".$a[$dogru]."');";
include 'mysql.php';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!<br>'.mysql_error(); exit;}
else
header("Location: ogretmen.php?a=1");
}?>
