<!-- <?php
	// session_start();
	// if (!isset($_SESSION["login"])) {
  	// header("Location: index.php");
?> -->

<?php
	try {
		$conn = new PDO("mysql:host=localhost;dbname=shop","root","");
		
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
		<div class="col-md-4"></div>
		<div class="col-md-4 mt-5 bg-light" >

			<form class="form-group" method="POST" action="" enctype="multipart/form-data">
				<input type="file" name="fileToUpload" id="fileToUpload">				
				<label class="mt-2"><i>Nom de l'article</i></label>
				<input type="text" name="article" class="form-control" >
				<label class="mt-2"><i>Prix</i></label>
				<input type="text" name="prix" class="form-control mb-2">
				<input type="submit" name="publier" class="btn btn-outline-primary" value="Publier">
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<?php
	include "template-parts/footer.php";
?>



<?php

	if (isset($_POST['publier'])) {
		
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// // Check if $uploadOk is set to 0 by an error
			// if ($uploadOk == 0) {
  	// 			echo "Sorry, your file was not uploaded.";
			// // if everything is ok, try to upload file
			// } else {
			// 	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 		// 		   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
 		// 		 } else {
 		// 		   echo "Sorry, there was an error uploading your file.";
 		// 		 }
			// }

			$file = htmlspecialchars(basename( $_FILES["fileToUpload"]["name"]));
			$lienfichier = "http://localhost/Dashbord/uploads/" . $file;
			$image = htmlspecialchars($lienfichier);
			$article = htmlspecialchars($_POST['article']);
			$prix = htmlspecialchars($_POST['prix']);

			$conn->query("INSERT INTO articles(image,article,prix) VALUES ('".$image."','".$article."','".$prix."')");
			header("Location: articles.php");

		}
?>