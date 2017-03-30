<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php	    
	$user='root';
	$password='';
	$serveur='localhost';
	$bdd='goorgoorluu';
	if(mysql_connect('localhost','root','')>0){
		if(mysql_select_db('goorgoorluu')){
			if(!empty($_POST['new'])){
				foreach ($_POST['new'] as $modifier) {
					if($modifier!=""){
						switch (key($_POST['new'])) {
							case '0':
							$query="update prestataire set nom='".$modifier."' where login='".$_SESSION['login']."'";
							if($result=mysql_query($query)){
								$_SESSION['modifier']=true;
							}
							break;
							case '1':
							$query="update prestataire set prenom='".$modifier."' where login='".$_SESSION['login']."'";
							if($result=mysql_query($query)){
								$_SESSION['modifier']=true;	
							}
							break;
							case '2':
							$query="update prestataire set adresse='".$modifier."' where login='".$_SESSION['login']."'";
							if($result=mysql_query($query)){
								$_SESSION['modifier']=true;
							}
							break;
							case '3':
							$query="update prestataire set tel='".$modifier."' where login='".$_SESSION['login']."'";
							if($result=mysql_query($query)){
								$_SESSION['modifier']=true;
							}
							break;

							default:
							# code...
							break;
						}
					}
					next($_POST['new']);

				}
				header("location:../Prestataires/parametres.php");
			}
			if(!empty($_POST['other']) and isset($_POST['other'])){
				foreach ($_POST['other'] as $valeur) {
					if($valeur!=""){
						switch (key($_POST['other'])) {
							case '0':
							$query="update prestataire set service='".$valeur."' where login='".$_SESSION['login']."'";
							var_dump($query);
							if($result=mysql_query($query)){
								$_SESSION['modifier']=true;
							}
							break;
							case '1':
							$query="update prestataire set rayonCouverture='".$valeur."' where login='".$_SESSION['login']."'";
							var_dump($query);
							if($result=mysql_query($query)){
								$_SESSION['modifier']=true;	
							}
							break;
							case '2':
							$query="update prestataire set margePrix='".$valeur."' where login='".$_SESSION['login']."'";
							var_dump($query);
							if($result=mysql_query($query)){
								$_SESSION['modifier']=true;
							}
							break;
							default:
							# code...
							break;
						}
					}
					next($_POST['other']);

				}
				header("location:../Prestataires/parametres.php");
			}
			if($_FILES["image"]["name"]!=""){
				$dossier="../images/profiles/";
				var_dump($dossier);
				$fiche=$_FILES["image"]["name"];
				copy($_FILES["image"]["tmp_name"],  $dossier.$fiche);
				$query="update prestataire set photo='".$fiche."' where login='".$_SESSION['login']."'";
				var_dump($query);
				if($result=mysql_query($query)){
					$_SESSION['modifier']=true;
				}
			}
			if($_POST['status']=="Disponible"){
				$query="update prestataire set disponibilite=true where login='".$_SESSION['login']."'";
				if($result=mysql_query($query)){
					$_SESSION['modifier']=true;
				}
			}
			else if($_POST['status']=="Non Disponible"){
				$query="update prestataire set disponibilite=false where login='".$_SESSION['login']."'";
				if($result=mysql_query($query)){
					$_SESSION['modifier']=true;
				}	
			}
		}
	}
	?>
</body>
</html>