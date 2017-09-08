<?php
if(!empty($_COOKIE["ogrenci"]))
$kul_ad=$_COOKIE["ogrenci"];
else
die("Lutfen Giris Yapiniz!");?>
<?php
if(!empty($_GET["id"]))
$id=$_GET["id"];
else
$id=1;
if(empty($_POST["ders"]))
die("HATA!!!");
else
$ders=$_POST["ders"];
include 'mysql.php';
if(!empty($_POST["cevap"]))
{
$sorgu='select id from cevaplar where soruid="'.($id-1).'" and kullanici="'.$kul_ad.'" and ders="'.$ders.'";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
if($yaz=mysql_fetch_array($sonuc))
{
$sorgu='delete from cevaplar where id='.$yaz[0].';';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!<br>'.mysql_error(); exit;} 
}
$sorgu="INSERT INTO cevaplar(kullanici,ders,soruid,cevap) VALUES ('".$kul_ad."','".$ders."','".($id-1)."','".$_POST["cevap"]."');";
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!<br>'.mysql_error(); exit;}
}
?>
<?php
$sorgu='select * from '.$ders.' where soruid="'.$id.'";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$yaz=mysql_fetch_array($sonuc);
if(empty($yaz[0]))
{ die('<b>Sinav Sorulari Bitmistir!</b><br><a href="ogrenci.php"><button type="button">Sinavi Bitir</button></a>');}
else
{
print($yaz[1]."<br>");
print('<form action="sinav.php?id='.++$id.'" method="post">');
print('<input type="radio" name="cevap" value="'.$yaz[2].'"/>'.$yaz[2].'</br>');
print('<input type="radio" name="cevap" value="'.$yaz[3].'"/>'.$yaz[3].'</br>');
print('<input type="radio" name="cevap" value="'.$yaz[4].'"/>'.$yaz[4].'</br>');
print('<input type="radio" name="cevap" value="'.$yaz[5].'"/>'.$yaz[5].'</br>');
print('<input type="radio" name="cevap" value="'.$yaz[6].'"/>'.$yaz[6].'</br>');
print ('<button type="submit">Cevapla</button>
<input type="hidden" name="ders" value="'.$ders.'"/></form><br>
<a href="ogrenci.php"><button type="button">Sinavi Bitir</button></a>');
}
?>




