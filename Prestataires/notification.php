<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/notification.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
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
			                <li >
			                  <a href="account.php">
			                  	 <i class="material-icons"> account_circle</i> 
			                  	 <span>Account</span>   	 
			                  </a>
			                </li>
			                <li data-toggle="collapse" class="collapsed active">
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
			            </ul>
			    	</div>
			</div>

			<div id="content">
				<div class="fieldset1" style="float: right;">
					<img src="../images/service.png" style="padding-left: 36em;">
				</div>
				<div class="fieldset" style="float: right;">
					<div class="cards">
					
<?php
				// on se connecte à notre base de données
				$base = mysql_connect ('localhost', 'root', '');
				mysql_select_db ('goorgoorluu', $base) ;

				// préparation de la requete
				$sql = "SELECT * from serviceRendu";
				$sql1 = "SELECT * from soliciteur";


				// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
				$req1 = mysql_query($sql1) or die('Erreur SQL !<br/>'.$sql1.'<br/>'.mysql_error());

				// on compte le nombre de sujets du forum
				$nb_sujets = mysql_num_rows ($req);
				if ($nb_sujets == 0) {
				echo 'Aucun service rendu';
				}
				else {
					while ($data = mysql_fetch_array($req)) {
							echo '<div class="card">';
								echo '<div class="content" style="padding: 1em;">';
									echo '<div class="header">';
										while ($data1 = mysql_fetch_array($req1)) {
											if($data1['id'] == $data['user']){
												echo 'Solociteur : '.htmlentities(trim($data1['prenom']));
												echo '     ';
												echo htmlentities(trim($data1['nom']));
												break;
											}
										}
									echo '</div>';
									echo '<div class="meta">';
										echo 'Date : '.htmlentities(trim($data['dat']));
									echo '</div>';
									echo '<div class="description">';
										echo 'Note Attribuee : '.htmlentities(trim($data['note']));
									echo '</div>';
								echo '</div>';
							echo '</div>';
				  	}
				  }		

?>							
		        </div>
				
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