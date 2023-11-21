<?php
include("baglan.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>KİTAPSİN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="giris.php" method="post">
     	<h2>ÜYE GİRİŞİ</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>KULLANICI ADI:</label>
     	<input type="text" name="kullaniciadi" placeholder="Kullanıcı Adı"><br>

     	<label>PAROLA:</label>
     	<input type="password" name="sifre" placeholder="Parola"><br>

     	<a href="index.php" ><button type="submit">GİRİŞ YAP</button></a>
		 
     </form>
     <a href="kayit.php" class="btn" ><button type="submit">KAYIT OL</button></a>
	 
</body>
</html>