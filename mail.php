<?php 
include ("phpkodlar\baglan.php");

if(isset($_POST['ad']) && isset($_POST['eposta'])  && isset($_POST['yorumunuz'])) {
    if(empty($_POST['ad']) || empty($_POST['eposta']) || empty($_POST['yorumunuz'])) {
       echo 'TÜM YERLERİ DOLDURUNUZ.';
    } else {
       $ad = strip_tags($_POST['ad']);
       $eposta = strip_tags($_POST['eposta']);
       
       $mesaj = strip_tags($_POST['mesaj']);
       $icerik = 'Ad: ' . $ad . '<br/>E-Posta: '. $eposta . '<br/>' . $mesaj;
       mail('KİTAPSİN', $icerik);
       echo 'Yorumunuz Gönderildi!.';
       header('Refresh:1; index.php');
    }
 } else {
    
    echo 'Lütfen Formu Doldurun.';
    
 }
?>