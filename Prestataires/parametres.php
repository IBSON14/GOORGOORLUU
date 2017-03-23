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
	<button type="submit" name="deconnex" style="width: 10%; background-color: blue; margin: auto;">DECONNEXION</button>	<p><img src="images/logo.png" style="float: right;margin: 0.5em 2em;"></p>
	</div>

	<div id="content-wrap">
	<?php
	if($_SESSION["modifier"]==true)
		echo "<script type='text/javascript'>alert('ENREGISTRER AVEC SUCCESS')</script>"
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
			            </ul>
			    	</div>
			</div>

			<div id="content">
				<div class="fieldset1">
					<fieldset style="margin-left: 5em;width: 85%;margin-top: 1em;">
						<legend style="margin-left: 21rem;">Mdofier INFOS Compte</legend>
						<form action="../Php/bddparam.php" method="POST">
						<label style="margin-left: 10em">Name</label>
						<div style="padding: 1em 20em;">
							<input type="text" name="new[]" placeholder="nom">
							<input type="text" name="new[]" placeholder="prenom">	
						</div>

						<label style="margin-left: 10em">Contacts</label>	
						<div style="padding: 1em 20em;">
							<input type="text" name="new[]" placeholder="adresse">
							<input type="number" name="new[]" placeholder="Tel">
						</div>
						<div style=" margin-left: 42em;">
							<button class="button" type="submit">Valider</button>
						</div>
					</form>
					</fieldset><br>
					<fieldset style="margin-left: 5em;width: 85%;margin-bottom: 1em;">
						<legend style="margin-left: 21rem;">Mdofier INFOS sur Renseignements</legend>
						<label>Services Proposees</label>
						<div style="padding: 1em 20em;">
							<select class="dropdown">
								<option value="">Mecanique <!-- <input type="checkbox" name=""> --></option>
								<option value="1">Plombier</option>
							</select>
						</div>
						<label>Rayon de Couverture</label>
						<div style="padding: 1em 20em;">
							<select class="dropdown" multiple="multiple"  size="10">
								<option value="">Mariste</option>
								<option value="">Yoff</option>
								<option value="">Mariste</option>
								<option value="">Yoff</option>
								<option value="">Mariste</option>
								<option value="">Yoff</option>
							</select>
						</div>

						<label>Marge Prix</label>	
						<div style="padding: 1em 20em;">
							<input type="number" name="" placeholder="prix" style="width: 52%">
						</div>
						<div style=" margin-left: 42em;">
							<button class="button">Valider</button>
						</div>

					</fieldset>
				</div>
				
			</div>
	</div>

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