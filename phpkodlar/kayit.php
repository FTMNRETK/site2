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
     <form action="kayçt.php" method="post">
     	<h2>KAYIT OL</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>KULLANICI ADI:</label>
     	<input type="text" name="kullaniciadi" placeholder="Kullanıcı Adı"><br>

     	<label>PAROLA:</label>
     	<input type="password" name="sifre" placeholder="Parola"><br>

         <label>TEKRAR PAROLA:</label>
     	<input type="password" name="tekrar_sifre" placeholder="Tekrar Parola"><br>

     	
		 <a herf="kayçtol.php"><button type="submit">KAYIT OL</button></a>
     </form>
	
</body>
</html>