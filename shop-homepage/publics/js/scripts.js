$(document).ready(function(){

<?php

	try {
		$conn = new PDO("mysql:host=localhost;dbname=shop","root","");
		//echo "Connected";
	}
	catch(PDOException $e) {
		echo $e ; die() ;
	}

?>

var entete = $(#entete);


})
 