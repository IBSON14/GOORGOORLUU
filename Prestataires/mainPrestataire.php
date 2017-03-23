<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/styleMainPrestataire.css"/>
	<!-- [if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
<![endif] -->
<?php if($_SESSION['erreur']){
	echo"<script type=text/javascript> alert('LOGIN OU MOT DE PASSE INCORRECT');</script>";
}
?>
</head>
<body>
<div id="wrap">
	<div id="header">
		<p><img src="images/logo.png" style="float: right;margin: 0.5em 2em;"></p>
	</div>

	<div id="content-wrap">
		<div id="content">
			
			<div class="signIn  dividing">
				<form class="field " action="../Php/basededonne.php" method="POST">
					<input type="text" name="logi" placeholder="login"/>
					<input type="password" name="pwd1" placeholder="password"/>	
					<button class="button" type="submit" name="connex">Connexion</button>
				</form>
			</div>
			
			<div class="signUp">
			<h1>Inscription</h1>

				<form class="fieldset" method="POST" action="../Php/basededonne.php">
					
						<h3>Compte</h3>

						<label style="color: black;">Name</label>
						<div style="padding: 1em 10em;">
							<input type="text" name="nom" placeholder="nom">
							<input type="text" name="prenom" placeholder="prenom">	
						</div>
						<label style="color: black;">Contacts</label>	
						<div style="padding: 1em 10em;">
							<input type="text" name="adresse" placeholder="adresse">
							<input type="number" name="tel" placeholder="Tel">
						</div>
						<div style=" margin-left: 5em;">
							<button class="button" type="submit">Valider</button>
						</div>	
						
				</form>
			</div>

		</div>
	</div>
  
	<div id="footer">
		<div id="labfooter">
			<p><a href="http://www.456bereastreet.com/lab/">a propos</a> | <a href="http://www.456bereastreet.com/">Conditions d'utilisations</a> | <a href="http://www.456bereastreet.com/lab/">confidentialite</a> </p>
		</div>	
	</div>

</div>
</body>
</html>