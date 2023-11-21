<?php

include("baglan.php");


$kullaniciadi=$_POST["kullaniciadi"];
$sifre=$_POST["sifre"];

$ekle= "INSERT INTO kullanici ( kullaniciadi,sifre )  VALUES ('$kullaniciadi','$sifre')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Kayıt gerçekleştirildi.";
    echo "<meta http-equiv ='refresh' content = '2; url = ../index.php'/>";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}


?>