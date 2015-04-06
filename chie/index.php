<?php
	if(isset($_GET["view"])){
		$view = $_GET["view"];
	} else {
		$view = "home.htm";
	}
	include "_header.php";
	include "content/$view";
	include "_footer.php";
?>