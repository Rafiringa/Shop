
<?php
	try {
		$conn = new PDO("mysql:host=localhost;dbname=shop","root","");
		//echo "Connected";
	}
	catch(PDOException $e) {
		echo $e ; die() ;
	}

	if (isset($_GET['id']) AND !empty($_GET['id'])) {
		$getid = $_GET['id'];

		$recupArticle = $conn->prepare('SELECT * FROM articles WHERE id = ?');
		$recupArticle->execute(array($getid));
		if($recupArticle->rowCount() > 0){
			$articleInfos = $recupArticle->fetch();
			$image = $articleInfos['image'];
			$artice = $articleInfos['article'];
			$prix = $articleInfos['prix'];

			if (isset($_POST['Modifier'])) {
			$nouvel_article = htmlspecialchars($_POST['article']);
			$nouvel_prix = htmlspecialchars($_POST['prix']);

			$updateArticle = $conn->prepare('UPDATE articles SET article = ? AND prix = ? WHERE id = ?');
			$updateArticle->execute(array($nouvel_article,$nouvel_prix, $getid));

			header("Location: articles.php");
			}
			
		}
	}
	
?>

<?php
	include "template-parts/header.php";
?>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body">
	  <form class="form-group" method="POST" action="traitement.php" >
				<img class="card-img-top" src="<?= $image; ?>" alt="..."/>
				<input type="text" name="article" value="<?= $article; ?>">
				<input type="text" name="prix" value="<?= $prix; ?>">
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
		<input type="submit" name="modifier" value="Modifier" class="btn btn-primary mb-2">
			</form>
      </div>
    </div>

  </div>
</div>


<?php
	include "template-parts/footer.php";
?>