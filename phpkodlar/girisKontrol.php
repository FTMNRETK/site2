<?php
session_start();
include("baglan.php"); 
$kullaniciadi=$_POST["kullaniciadi"];
$sifre=$_POST["sifre"];
$sql= "select * from uyeler WHERE kullaniciadi=?
 AND sifre=?"; 
$sorgu=$baglan->prepare($sql);
$sorgu->bind_param("ss",$kullaniciadi,$sifre);
$sorgu->execute();
$sonuc= $sorgu->get_result();
if ($sonuc->num_rows > 0) 
{
  $_SESSION["girisYaptimi"]=true;   
  header("Location: ../index.php");
} else { 
     echo "Kullanıcı adınız veya parolanız yanlış";
     }

?>