<?php 
if(empty($_COOKIE["ogretmen"]))
die("Lutfen Giris Yapiniz!");
else{ 
echo '<html><body>Hosgeldin '.$_COOKIE["ogretmen"].'<form action="cikis.php" method="post">
<input type="submit" value="Cikis"/></form>';
echo '<table border="0" align="left">
<form action="soru_ekle.php" method="post">
<tr><td><select name="ders">
<option value="mat">MATEMATIK</option>
<option value="turkce">TURKCE</option>
<option value="fen">FEN BILIMLERI</option>
<option value="sosyal">SOSYAL BILIMLER</option>
</select></td></tr>
<tr><td>Soru :</td><td><textarea name="soru" rows="15" cols="39"/></textarea></td></tr>
<tr><td><input type="radio" name="chk" value="0" checked/>A :</td><td><input type="text" name="c1" size="50"/></td></tr>
<tr><td><input type="radio" name="chk" value="1"/>B :</td><td><input type="text" name="c2" size="50"/></td></tr>
<tr><td><input type="radio" name="chk" value="2"/>C :</td><td><input type="text" name="c3" size="50"/></td></tr>
<tr><td><input type="radio" name="chk" value="3"/>D :</td><td><input type="text" name="c4" size="50"/></td></tr>
<tr><td><input type="radio" name="chk" value="4"/>E :</td><td><input type="text" name="c5" size="50"/></td></tr>
<tr><td><input type="submit" value="Soruyu Kaydet"/></td></tr></form>
<tr><td>NOT: Dogru cevabi secmeyi unutmayiniz! </table>';
print('<table border="0" align="left"><tr><td><b>GENEL BASARI DURUMU</b></td></tr>');
include 'mysql.php';
$sorgu='select count(*) from cevaplar where ders="turkce";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$toplam=0;
while($yaz=mysql_fetch_array($sonuc)){$toplam=$yaz[0];}
$sorgu='select count(*) from cevaplar c  inner join turkce t on c.soruid=t.soruid where c.ders="turkce" and c.cevap=t.dogru;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Turkce : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr>');}

$sorgu='select count(*) from cevaplar where ders="mat";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$toplam=0;
while($yaz=mysql_fetch_array($sonuc)){$toplam=$yaz[0];}
$sorgu='select count(*) from cevaplar c  inner join mat t on c.soruid=t.soruid where c.ders="mat" and c.cevap=t.dogru;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Matematik : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr>');}

$sorgu='select count(*) from cevaplar where ders="fen";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$toplam=0;
while($yaz=mysql_fetch_array($sonuc)){$toplam=$yaz[0];}
$sorgu='select count(*) from cevaplar c  inner join fen t on c.soruid=t.soruid where c.ders="fen" and c.cevap=t.dogru;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Fen Bilimleri : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr>');}

$sorgu='select count(*) from cevaplar where ders="sosyal";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$toplam=0;
while($yaz=mysql_fetch_array($sonuc)){$toplam=$yaz[0];}
$sorgu='select count(*) from cevaplar c  inner join sosyal t on c.soruid=t.soruid where c.ders="sosyal" and c.cevap=t.dogru;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Sosyal Bilimler : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr></table>');}

print('<table border="0" align="center"><form action="ogretmen.php" method="post">
<tr><td><b>OGRENCI LISTESI</b></td></tr>
<tr><td>Basari durumun gormek istediginiz ogrencinin ismini seciniz!</td></tr>');
$sorgu='select kuladi,ad,soyad from uyeler;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td><input type="radio" name="ogrenci" value="'.$yaz[0].'"/>'.$yaz[1].' '.$yaz[2].'</td></tr>');}
print('<tr><td><input type="submit" value="Basari Incele"/></td></tr></form>');


if(!empty($_POST["ogrenci"])){
$kul_ad=$_POST["ogrenci"];
$sorgu='select count(*) from cevaplar where ders="turkce" and kullanici="'.$kul_ad.'";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$toplam=0;
while($yaz=mysql_fetch_array($sonuc)){$toplam=$yaz[0];}
$sorgu='select count(*) from cevaplar c  inner join turkce t on c.soruid=t.soruid where c.ders="turkce" and c.kullanici="'.$kul_ad.'" and c.cevap=t.dogru;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Turkce : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr>');}

$sorgu='select count(*) from cevaplar where ders="mat" and kullanici="'.$kul_ad.'";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$toplam=0;
while($yaz=mysql_fetch_array($sonuc)){$toplam=$yaz[0];}
$sorgu='select count(*) from cevaplar c  inner join mat t on c.soruid=t.soruid where c.ders="mat" and c.kullanici="'.$kul_ad.'" and c.cevap=t.dogru;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Matematik : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr>');}

$sorgu='select count(*) from cevaplar where ders="fen" and kullanici="'.$kul_ad.'";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$toplam=0;
while($yaz=mysql_fetch_array($sonuc)){$toplam=$yaz[0];}
$sorgu='select count(*) from cevaplar c  inner join fen t on c.soruid=t.soruid where c.ders="fen" and c.kullanici="'.$kul_ad.'" and c.cevap=t.dogru;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Fen Bilimleri : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr>');}

$sorgu='select count(*) from cevaplar where ders="sosyal" and kullanici="'.$kul_ad.'";';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
$toplam=0;
while($yaz=mysql_fetch_array($sonuc)){$toplam=$yaz[0];}
$sorgu='select count(*) from cevaplar c  inner join sosyal t on c.soruid=t.soruid where c.ders="sosyal" and c.kullanici="'.$kul_ad.'" and c.cevap=t.dogru;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Sosyal Bilimler : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr></table>');}

}
else
print('</table>');


if(!empty($_GET["a"]) && $_GET["a"]=="1")
echo "<br><br><br><b>SORU BASARIYLA EKLENDI!!!</b>";
}?>


