<?php
session_start();
$base = mysql_connect();
mysql_select_db('goorgoorluu',$base);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/styleMainPrestataire.css"/>
	<style type="text/css">
		select {
			display: block;
			height: auto;
			width: 70%;
			background: #ffffff;
			border: 1px solid rgba(34, 36, 38, 0.15);
			border-radius: 0.28571429rem;
			box-shadow: 0em 0em 0em 0em transparent inset;
			padding: 0.62em 1em;
			color: rgba(0, 0, 0, 0.87);
			-webkit-transition: color 0.1s ease, border-color 0.1s ease;
			transition: color 0.1s ease, border-color 0.1s ease;
		}
		select.dropdown {
			height: 38px;
			padding: 0.5em;
			border: 1px solid rgba(34, 36, 38, 0.15);
			visibility: visible;
		}
	</style>
	<!-- [if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
<![endif] -->
<?php if(!empty($_SESSION['erreur']) AND ($_SESSION['erreur']==true)){
	echo"<script type=text/javascript> alert('LOGIN OU MOT DE PASSE INCORRECT');</script>";
	unset($_SESSION['erreur']);
}
?>
</head>
<body>
<div id="wrap">
	<div id="header">
		<p><img src="images/logo.png" style="float: right;margin: -0.8em 2em; width:80px; height: 55px;"></p>
	</div>
	<?php
		
		if(mysql_connect('localhost','root','')>0){
			if(mysql_select_db('goorgoorluu')){
	?>
	<div id="content-wrap" style="overflow-y: hidden;">
		<div id="content">
			
			<div class="signIn  dividing">
				<form class="field " action="../Php/basededonne.php" method="POST">
					<input type="text" name="logi" placeholder="login" style="width: 15em;" />
					<input type="password" name="pwd1" placeholder="password" style="width: 15em;"/>	
					<button class="button" type="submit" name="connex">Connexion</button>
				</form>
			</div>
			
			<div class="signUp">
			<h1>Inscription</h1>

				<form class="fieldset" method="POST" action="../Php/basededonne.php" style="width: 70%;height: 26em;margin-left: 17em;padding-top: 2em;">

						<label style="color: black;padding: 5em 10em;margin-top: 4em;font-size: 14px;">Name</label>
						<div style="padding: 1em 15em;">
							<input type="text" name="nom" placeholder="nom" style="width: 18em;">
							<input type="text" name="prenom" placeholder="prenom" style="width: 18em;">	
						</div>
						<label style="color: black;padding: 2em 10em;font-size: 14px;">Adresse</label>	
						<div style="padding: 1em 24em;">
							<select class="dropdown" name="adresse" style="width: 20em;">
								<?php
									$query="select * from zoneCouverture";
									$result=mysql_query($query);
									while ($ligne=mysql_fetch_row($result)){
								?>
								<option><?php echo $ligne[0]; ?></option>
								<?php } ?>
							</select>
						</div>
						<label style="color: black;padding: 2em 10em;font-size: 14px;">Contacts</label>
						<div style="padding: 1em 24em;">
							<input type="number" name="tel" placeholder="Tel" style="width: 20em;">
						</div>
						<div style=" margin-left: 30em;margin-top: 3em;">
							<button class="button" type="submit" style="width: 10em;">Valider</button>
						</div>	
						
				</form>
			</div>

		</div>
	</div>
	<?php
		}
	}
		?>
  
	<div id="footer">
		<div id="labfooter">
			<p><a href="http://www.456bereastreet.com/lab/">a propos</a> | <a href="http://www.456bereastreet.com/">Conditions d'utilisations</a> | <a href="http://www.456bereastreet.com/lab/">confidentialite</a> </p>
		</div>	
	</div>

</div>
</body>
</html>