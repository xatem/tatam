<?php

$dbhost = "caglarguner.com";
$dbuser = "onurguner";	
$dbpass = "14785236951";		
$dbname = "onurgune_tadilat";	
 
$baglanti = mysql_connect($dbhost, $dbuser, $dbpass);
	if (!$baglanti) die ("MySQL bağlantısı başarısız.");

mysql_select_db($dbname, $baglanti) or die ("Veritabanına bağlanamadı.");
	      mysql_query("SET NAMES UTF8");

?>