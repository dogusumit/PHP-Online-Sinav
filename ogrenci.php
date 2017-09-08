<?php
if(!empty($_COOKIE["ogrenci"]))
$kul_ad=$_COOKIE["ogrenci"];
else
die("Lutfen Giris Yapiniz!");?>
<?php
include 'mysql.php';
print ('<table border="0" align="left">
<tr><td>Hosgeldin&nbsp'.$kul_ad.'</td>');
print ('<td><a href="cikis.php"><button type="button">Cikis</button></a></td></tr></table><br><br>
<table border="0" align="left"><tr><td><table border="0" align="left"><tr><td><b>SISTEMDEKI SORU SAYISI</b></td></tr>');
$sorgu='select count(*) from turkce;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Turkce : '.$yaz[0].'</td></tr>');}
$sorgu='select count(*) from mat;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Matematik : '.$yaz[0].'</td></tr>');}
$sorgu='select count(*) from fen;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Fen Bilimleri : '.$yaz[0].'</td></tr>');}
$sorgu='select count(*) from sosyal;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
while($yaz=mysql_fetch_array($sonuc)){
print('<tr><td>Sosyal Bilimler : '.$yaz[0].'</td></tr>');}
print('<tr><td><b>Lutfen dersi secip sinava basla butonuna tiklayiniz. Basarilar!</td></tr></table></td>
<td><table border="0" align="center"><tr><td><b>BASARI DURUMUM</b></td></tr>');
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
print('<tr><td>Sosyal Bilimler : '.$yaz[0].' Dogru, '.($toplam-$yaz[0]).' Yanlis</td></tr></table></td>');}



print('</tr><tr><td><table border="0" align="left"><tr><td><form action="sinav.php" method="post">
<select name="ders">
  <option value="turkce">TURKCE</option>
  <option value="mat">MATEMATIK</option>
  <option value="fen">FEN BILIMLERI</option>
  <option value="sosyal">SOSYAL BILIMLER</option>
</select></tr>
<tr><td><button type="submit">Sinava Basla</button></table>');
?>




