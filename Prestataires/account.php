<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/notification.css">
	<link rel="stylesheet" type="text/css" href="../css/styleAccount.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="wrap">
		<?php
		$user='root';
		$password='';
		$serveur='localhost';
		$bdd='goorgoorluu';
		if(mysql_connect('localhost','root','')>0){
			if(mysql_select_db('goorgoorluu')){
				$query="select nom, prenom, tel, photo from prestataire where login='".$_SESSION['login']."'";
				$result=mysql_query($query);
				$ligne=mysql_fetch_row($result);
				?>
				<div id="header">
					<p> <img src="../images/logo.jpg" style="float: right;margin: 0.5em 2em; width:10%; height: 10%;"></p>
				</div>

				<div id="content-wrap">
					<div class="nav-side-menu">
						<div class="brand">Menu</div>
						<i class=" material-icons toggle-btn" data-toggle="collapse" data-target="#menu-content" style="background: lightgrey">menu</i>

						<div class="menu-list">
							<ul id="menu-content" class="menu-content collapse out">
								<li class="active">
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
								<li data-toggle="collapse" class="collapsed">
									<a href="parametres.php"><i class="material-icons">settings</i>
										<span>Parametres</span>
									</a>
								</li>
								<li data-toggle="collapse" class="collapsed">
									<a href="?deconnex=true"><i class="material-icons">lock outline</i>
										<span>Deconnexion</span>
									</a>
								</li>
							</form>
						</ul>
					</div>
				</div>

				<div id="content">
					<div class="containt">
						<p>  
                        <img src="<?php echo '../images/profiles/'.$ligne[3];?>" style="width: 15%; height:10%; float: right; padding: 10px; border-radius:50%;">
							<?php echo "<p style='float:right;'><b>".$ligne[0]." ".$ligne[1]."<br><br>";?>
							<?php
							$query1="select disponibilite from prestataire where login='".$_SESSION['login']."'";
							$result1=mysql_query($query1);
							if(($ligne1=mysql_fetch_row($result1))){
								if($ligne1[0]==false){
									?>
									<label for="slide" class="checkbox">
										<input type="checkbox" id="slide" name="check" disabled="disabled" checked="checked"/>
										<span class="rounded"></span>
										Status:Non DISPONIBLE</label> 
										<?php }else{?>
										<label for="slide" class="checkbox">
											<input type="checkbox" id="slide" name="check" disabled="disabled"  />
											<span class="rounded"></span>
											Status:DISPONIBLE</label>
											<?php
										echo "</p>"; 
										}  
									}
									?>
								</p>			
								<div class="slideshow-container">

									<div class="mySlides fade">
										<div class="numbertext">1/3</div>
										<img src="../images/mecanicien1.png" style="width:100%">
										<div class="text">Caption Text</div>
									</div>

									<div class="mySlides fade">
										<div class="numbertext">2 / 3</div>
										<img src="../images/menuiser.png" style="width:100%">
										<div class="text">Caption Two</div>
									</div>

									<div class="mySlides fade">
										<div class="numbertext">3 / 3</div>
										<img src="../images/plomberie.png" style="width:100%">
										<div class="text">Caption Three</div>
									</div>

								</div>
								<br>
								<div style="text-align:center">
									<span class="dot"></span> 
									<span class="dot"></span> 
									<span class="dot"></span> 
								</div>

								<?php
								if(isset($_GET['deconnex'])){
									session_destroy();
									header("location:../Prestataires/mainPrestataire.php");
								}
							} } ?>
							<div id="footer">
								<div id="labfooter">
									<p><a href="http://www.456bereastreet.com/lab/">a propos</a> | <a href="http://www.456bereastreet.com/">Conditions d'utilisations</a> | <a href="http://www.456bereastreet.com/lab/">confidentialite</a> </p>
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
 </div>
 </div>
 
</body>
</html>