

<?php
	include "template-parts/header.php"; 
?>

<?php
	try {
		$conn = new PDO("mysql:host=localhost;dbname=shop","root","");
		//echo "Connected";
	}
	catch(PDOException $e) {
		echo $e ; die() ;
	}

					$recupVisite = $conn->query("SELECT * FROM nombre_visiteur WHERE 1");
					$res = $recupVisite->fetchAll(PDO::FETCH_OBJ) ;

					$count = 0;
					for ($i=0; $i<count($res); $i++):
						$count++;
					endfor;

					$total = $count;	
?>

	<h2>Nombre total de visiteur: <?php echo $total; ?></h2>

<?php
	include "template-parts/footer.php";
?>