<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exceptions $e){
	die('Erreurs : ' . $e->getMessage());
}
?>