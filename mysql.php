<?php
$host="localhost";
$kullanici="user";
$sifre="pass";
$veritabani="database";
$baglanti=mysql_connect($host,$kullanici,$sifre);
if(!$baglanti){
die ('veritabani baglanti hatasi!!!');
}
else{
if(!mysql_select_db($veritabani,$baglanti))
{die ('veritabani secmede hata!!!');}
}?>
