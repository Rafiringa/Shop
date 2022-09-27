
<?php
	try {
		$conn = new PDO("mysql:host=localhost;dbname=shop","root","");
		//echo "Connected";
	}
	catch(PDOException $e) {
		echo $e ; die() ;
	}
	
?>

<?php
	include "template-parts/header.php";
?>


<div class="container px-4 px-lg-5 mt-5">
		<div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
			<?php
					$recupArticles = $conn->query("SELECT * FROM images WHERE 1");
					$res = $recupArticles->fetchAll(PDO::FETCH_OBJ) ;
				?>
				<?php for ($i=0; $i<count($res); $i++): ?> 
			<div class="col-mb-5">
				<div class="card h-100">
						<div class="article">
							<img class="card-img-top" src="<?php echo $res[$i]->image; ?>" alt="..." style="height: 200px;" />
							<!-- <div class="card-body p-4">
                                <div class="text-center">
                                                                                                                                            	
                                   	<a href="http://localhost/Dashbord/traitement.php?action=delete&id=<?php echo $res[$i]->id ;?>" class="supprimer mr-1 my-2" style="float: right; color: red;" > Supprimer</a>

                                   	<a href="#"  class="modifier my-2" data-id="<?php echo $res[$i]->id?>" data-image="<?php echo $res[$i]->image?>" data-article="<?php echo $res[$i]->article?>" data-prix="<?php echo $res[$i]->prix?>" data-toggle="modal" data-target="#myModal" style="float: left;">Modifier</a>
                                   	
                                </div>
                            </div> -->
						</div>

				</div>
			</div>
			<?php endfor; ?>
		</div>
		<a href="acceuil.php" style="float: right;">Retour</a>
	</div>


<?php
	include "template-parts/footer.php";
?>