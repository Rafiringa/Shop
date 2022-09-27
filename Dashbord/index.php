<?php
	include "template-parts/header.php";
?>

<div class="container bg-white">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 bg-dark shadow" style="color: white">
			<form class="form-group" action="traitement.php" method="POST">
				<label>Login</label>
				<input type="text" name="login" class="form-control">
				<label>Mot de passe</label>
				<input type="password" name="motdepasse" class="form-control">
				<input type="submit" name="seconnecter" value="Se connecter" class="btn btn-secondary btn-block mt-3" >
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>



<?php
	include "template-parts/footer.php";
?>