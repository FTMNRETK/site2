<?php
ob_start();
session_start();
include("baglan.php");
    
$kullaniciadi=$_POST["kullaniciadi"];
$sifre=$_POST["sifre"];

$sql= "SELECT * FROM kullanici WHERE kullaniciadi=?
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
     echo "KULLANICI BİLGİLERİNİZİ EKSİKSİZ GİRİNİZ.";
     header("Refresh:2; url='index.php'");
     }

?>