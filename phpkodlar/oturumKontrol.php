<?php
session_start();
if(@$_SESSION["girisYaptimi"]!=true){
    echo "<meta http-equiv ='refresh' content = '0; url =phpkodlar\index.php'/>";
    exit();
}
?>