<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/notification.css"/>
	<link rel="stylesheet" type="text/css" href="../css/styleMainPrestataire.css"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.fieldset1 {
			border: 1px solid #c0c0c0;
			margin-left: 25em;
			margin-top: 1em;
			margin-bottom: 1em;
			padding: 0.35em 0.625em 0.75em;
			width: 75%;
			height: 35em;
			overflow-x: hidden;
		}

		select {
			display: block;
			height: auto;
			width: 60%;
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
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="wrap">

		<div id="header">
			<p><img src="images/logo.png" style="float: right;margin: -0.8em 2em; width:80px; height: 55px;"></p>
		</div>

		<div id="content-wrap">
			<?php
			if( isset($_SESSION['modifier']) AND ($_SESSION["modifier"]==true)){
				echo "<script type='text/javascript'>alert('ENREGISTRER AVEC SUCCESS')</script>";
				unset($_SESSION["modifier"]);
			}
			$user='root';
			$password='';
			$serveur='localhost';
			$bdd='goorgoorluu';
			if(mysql_connect('localhost','root','')>0){
				if(mysql_select_db('goorgoorluu')){
					?>
					<div class="nav-side-menu">
						<div class="brand">Menu</div>
						<i class=" material-icons toggle-btn" data-toggle="collapse" data-target="#menu-content" style="background: lightgrey">menu</i>

						<div class="menu-list">
							<ul id="menu-content" class="menu-content collapse out">
								<li>
									<a href="account.php">
										<i class="material-icons"> account_circle</i> 
										<span>Account</span>   	 
									</a>
								</li>
								<li data-toggle="collapse" class="collapsed">
									<a href="notification.php">
										<i class="material-icons"> announcement</i>
										<span>Notifications</span>
									</a>
								</li>  
								<li data-toggle="collapse"  class="collapsed">
									<a href="statistique.php">	
										<i class="material-icons">assessment</i>
										<span>Statistiques</span>
									</a>			                   
								</li>
								<li data-toggle="collapse" class="collapsed active">
									<a href="Parametres.php"><i class="material-icons">settings</i>
										<span>Parametres</span>
									</a>
								</li>
								<li data-toggle="collapse" class="collapsed">
									<a href="?deconnex=true"><i class="material-icons">lock outline</i>
										<span>Deconnexion</span>
									</a>
								</li>
							
							</ul>
						</div>
					</div>

					<div id="content">
						<div class="fieldset1">
							<fieldset style="margin-left: 5em;width: 85%;margin-top: 1em;">
								<legend style="margin-left: 21rem;">Modifier INFOS Compte</legend>
								<form action="../Php/bddparam.php" method="POST">
									<label style="margin-left: 1px;font-size: 14px">Name</label>
									<div style="padding: 1em 12em;">
										<input type="text" name="new[]" placeholder="nom" style="width: 20em"/>
										<input type="text" name="new[]" placeholder="prenom" style="width: 20em"/>	
									</div>

									<label style="color: black;padding: 2em 10em;font-size: 14px;">Adresse</label>	
									<div style="padding: 1em 24em;">
									<select class="dropdown" name="new[]" style="width: 20em;">
										<option></option>
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
							<input type="number" name="new[]" placeholder="Tel" style="width: 20em;">
						</div>
	
						<div style=" margin-left: 30em;">
							<button class="button" type="submit" style="width: 10em;">Valider</button>
						</div>
					</form>
							</fieldset><br>
							<fieldset style="margin-left: 5em;width: 86%;margin-bottom: 1em;">
								<legend style="margin-left: 21rem;">Modifier INFOS sur Renseignements</legend>
								<form action="../Php/bddparam.php" method="POST" enctype="multipart/form-data">
									<label style="font-size: 14px;">Services Proposees</label>
									<div style="padding: 1em 20em;">
										<select class="dropdown" name="other[]" style="width: 20em">
										<option></option>
											<?php
											$query1="select*from service";
											$result1=mysql_query($query1);
											while ($ligne1=mysql_fetch_row($result1)) {
												?>
												<option value="<?php echo $ligne1[0]; ?>"><?php echo $ligne1[0]; ?></option>
												<?php }?>
											</select>
										</div>
										<label style="font-size: 14px;">Rayon de Couverture</label>
										<div style="padding: 1em 20em;">
											<select class="dropdown" name="other[]" style="width: 20em;">
											<option></option>
												<?php
												$query2="select*from zoneCouverture";
												$result2=mysql_query($query2);
												$i=1;
												while ($ligne2=mysql_fetch_row($result2)){
													?>
													<option value="<?php echo $ligne2[0]; ?>"><?php echo $ligne2[0]; ?></option>
													<?php $i++;} ?>
												</select>
											</div>

											<label style="font-size: 14px">Marge Prix</label>	
											<div style="padding: 1em 20em;">
												<input type="number" name="other[]" placeholder="prix" style="width: 20em">
											</div>
											<label style="font-size: 14px">Votre photo</label>	
											<div style="padding: 1em 20em;">
												<input type="file" name="image" placeholder="votre_photo" style="width: 20em">
											</div>
											<label style="font-size: 14px">Choisissez un status</label>	
											<div style="padding: 1em 20em;">
										     <select class="dropdown" name="status" style="width: 20em">
										     	<option>votre status</option>
										     	<option>Disponible</option>
										     	<option>Non Disponible</option>
										     </select>
											</div>
												<div style=" margin-left:26em;">
													<button class="button" type="submit" style="width: 10em">Valider</button>
												</div>

											</form>
										</fieldset>
									</div>

								</div>
							</div>
							<?php } } ?>
							<div id="footer">
								<div id="labfooter">
									<p><a href="http://www.456bereastreet.com/lab/">a propos</a> | <a href="http://www.456bereastreet.com/">Conditions d'utilisations</a> | <a href="http://www.456bereastreet.com/lab/">confidentialite</a> </p>
								</div>	
							</div>

						</div>

						<script>
							var slideIndex = 0;
							showSlides();
							function showSlides() {
								var i;
								var slides = document.getElementsByClassName("mySlides");
								var dots = document.getElementsByClassName("dot");
								for (i = 0; i < slides.length; i++) {
									slides[i].style.display = "none";  
								}
								slideIndex++;
								if (slideIndex> slides.length) {slideIndex = 1}    
									for (i = 0; i < dots.length; i++) {
										dots[i].className = dots[i].className.replace(" active", "");
									}
									slides[slideIndex-1].style.display = "block";  
									dots[slideIndex-1].className += " active";
    								setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>