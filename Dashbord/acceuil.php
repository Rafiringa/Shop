<?php
  session_start();
  if (!isset($_SESSION['login'])) {
  	header("Location: index.php");
  }
?>

<?php
	try {
		$conn = new PDO("mysql:host=localhost;dbname=shop","root","");
		// echo "Connected";
		}
		catch(PDOException $e) {
		echo $e ; die() ;
		}
?>

<?php
	include "template-parts/header.php"; 
?>


        <div class="container">
        	<div class="row">
        		<div class="col-md-3 bg-light" style="text-align: center; height: 700px;">
        			<a class="navbar-brand" href="#!" >e-varotra</a>
        			<div class="container my-5">
                <a href="publier_articles.php" style="text-decoration: none;">Publier un article</a><br>
                <a href="articles.php" style="text-decoration: none;">Afficher tous les articles</a><br>
                <a href="select.php" style="text-decoration: none;">Ajouter une image</a><br>
                <a href="afficher_image.php" style="text-decoration: none;">Afficher tous les images</a><br>
                <a href="visiteur.php" style="text-decoration: none;">Afficher le nombre de visiteur</a>
        			</div>
        		</div>
        		<div class="col-md-6"></div>
        		
        		<div class="col-md-3 mt-3"><form class="form-group" action="traitement.php" method="POST">
		<input type="submit" name="deconnecter" value="Se deconnecter" style="float: right;" class="btn btn-outline-danger">
	</form></div>
        	</div>
            
                
  </div>
        
        
	
<?php
	include "template-parts/footer.php";
?>