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
		  margin-left: 25em;
		  margin-top: 1em;
		  margin-bottom: 1em;
		  padding: 0.35em 0.625em 0.75em;
		  width: 75%;
		  height: 35em;
		  overflow-y: hidden;
		}

		.field {
		  border: 1px solid #c0c0c0;
		  margin-left: 1em;
		  margin-top: 6em;
		  margin-bottom: 1em;
		  padding: 0.35em 0.625em 0.75em;
		  width: 92%;
		  height: 20em;
		  overflow-x: hidden;
		}
		.feed {
  margin: 1em 4em;
}

.feed > .event {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  width: 100%;
  padding: 0.21428571rem 0em;
  margin: 0em;
  background: none;
  border-top: none;
}
.feed > .event > .label img {
  width: 100%;
  height: auto;
  border-radius: 500rem;
}

.feed > .event > .label + .content {
  margin: 0.5em 0em 0.35714286em 1.14285714em;
}

	</style>
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
<![endif]-->
</head>
<body>
<div id="wrap">

	<div id="header">
		<p><img src="images/logo.png" style="float: right;margin: 0.5em 2em;"></p>
	</div>

	<div id="content-wrap">
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
			                <li data-toggle="collapse"  class="collapsed active">
			                  <a href="statistique.php">	
			                    <i class="material-icons">assessment</i>
			                    <span>Statistiques</span>
			                   </a>			                   
			                </li>
			                 <li data-toggle="collapse" class="collapsed">
		                  		<a href="Parametres.php"><i class="material-icons">settings</i>
		                  			<span>Parametres</span>
		                  		</a>
			                </li>
			             <form action="../Php/basededonne.php" method="POST">
		                 <button type="submit" name="deconnex" style="width: 50%; background-color:#fc5d5d; margin: auto; color: white; padding: 12px; 
		                  margin-top:90%; float: right;">DECONNEXION</button>
		                 </form>
			            </ul>
			    	</div>
			</div>
          <?php
           $user='root';
	                 $password='';
	                 $serveur='localhost';
	                 $bdd='goorgoorluu';
	                 if(mysql_connect('localhost','root','')>0){
		             if(mysql_select_db('goorgoorluu')){ 
		             	$query1="select moyenne from prestataire where login='".$_SESSION['login']."'";
		             	$result1=mysql_query($query1);
		             	if($ligne1=mysql_fetch_row($result1)){
          ?>
			<div id="content">
				<div class="fieldset1">
					<div style="float: right;">
						<label style="background: #fc5d5d;border-radius: 1em"><?php echo $ligne1[0];?></label><input type="text" name="" style="height: 1.8em;" placeholder="/20" />		
					</div>
					<div class="dividing" style="margin-top: 5em;">	</div>
					<div class="field">
					 <?php }
		             $query="select nom,prenom,moyenne,photo from prestataire where service in(select service from prestataire where login='"
		             .$_SESSION['login']."') order by moyenne desc";
		             $result=mysql_query($query);
		             while($ligne=mysql_fetch_row($result)){
					 ?>
						<div class=" feed">
							<div class="event">
							    <div class="label">
							      <img src="<?php echo '../images/profiles/'.$ligne[3];?>" style="width: 10%; height: 100%;">
							      <?php echo $ligne[0]."--".$ligne[1];?>:<strong><?php echo $ligne[2]; ?>: </strong> <!-- <input type="text" name="" style="width: 2.5em;"> -->
							    </div>
							</div>
						</div>
					<?php }
				}
				}?>
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