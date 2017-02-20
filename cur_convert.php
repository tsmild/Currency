<?php
	session_start();
	$money = $_POST["money1"]; 
	$type = $_POST["typemoney"];  

	$convert = file_get_contents("https://www.google.com/finance/converter?a=".$money."&from=".$type."&to=THB");
	$convert = explode("<span class=bld>",$convert);
	$convert = explode("</span>",$convert[1]); 

	$_SESSION["converted"] = preg_replace("/[^0-9\.]/", null, $convert[0]);
	header("Location:index.php");

?>