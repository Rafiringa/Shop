<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>


<?php 
	try {
		$conn = new PDO("mysql:host=localhost;dbname=shop","root","");
		
	}
	catch(PDOException $e) {
		echo $e ; die() ;
	}
?>

<?php
	if (isset($_POST['submit'])) {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
  				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 				   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
 				 } else {
 				   echo "Sorry, there was an error uploading your file.";
 				 }
			}

			$file = htmlspecialchars(basename( $_FILES["fileToUpload"]["name"]));
			$lienfichier = "http://localhost/Dashbord/uploads/" . $file;
			$image = htmlspecialchars($lienfichier);

			$conn->query("INSERT INTO images(image) VALUES ('".$image."')");
			header("Location: afficher_image.php");
	}
?>