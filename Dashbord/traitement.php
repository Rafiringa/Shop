<?php
	session_start();
	if (!isset($_SESSION["login"])) {
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
	
	if (isset($_POST['seconnecter'])) {

		

		$login = $_POST['login'];
		$mdp = $_POST['motdepasse'];

		// $conn->query("INSERT INTO user(log,motdepasse) VALUES('".$login."','".$mdp."')") ;
		// header("Location: index.php") ;

			if($login == "Ampy" && $mdp == "12345") {
        	// Mankany @ accueil
       		 $_SESSION["login"] = $login ;
        	header("Location: acceuil.php") ;
    		}
    		else {
       		// Miverina eo @ index
    		 header("Location: index.php") ;
    		}
	
	} else if (isset($_POST['deconnecter'])) {
		session_destroy() ;
		header("Location: index.php");

	} else if (isset($_GET['action'])) {
		if ($_GET['action'] == 'delete') {
			$id = $_GET['id'];
			$conn->query("DELETE FROM articles WHERE id='".$id."'");
			header("Location: articles.php");
		}

	} else if (isset($_POST['modifier'])){
		$id = $_POST['id'];
		$article = htmlspecialchars($_POST['article']);
		$prix = htmlspecialchars($_POST['prix']);

					$conn->query("UPDATE articles SET article='".$article."', prix='".$prix."' WHERE id ='".$id."'");
					header("Location: articles.php");
	}

	
	else{
		header("Location: index.php");
	}

?>

<?php

?>


