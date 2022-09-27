
<?php

	try {
		$conn = new PDO("mysql:host=localhost;dbname=shop","root",""); 
		//echo "Connected";
	}
	catch(PDOException $e) {
		echo $e ; die() ;
	}


<?php

// $target_dir = "http://localhost/shop-homepage/publics/images/";
// $target_file = $target_dir . basename($_FILES["abstraitarbrefeuillebriselunesoleilnuit.jpg"]["colline"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["abstraitarbrefeuillebriselunesoleilnuit.jpg"]["colline"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }
 


?>



