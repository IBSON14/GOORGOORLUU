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
			//inscrire un prestataire
			if(isset($_REQUEST['nom']) AND isset($_REQUEST['prenom']) AND isset($_REQUEST['adresse']) AND
				isset($_REQUEST['tel'])){
                $default="default.png";
				$query="insert into prestataire(nom,prenom,adresse,tel,photo) values('".$_REQUEST['nom']."','".$_REQUEST['prenom']."','"
			.$_REQUEST['adresse']."','".$_REQUEST['tel']."','".$default."')";
			$result=mysql_query($query);
			if($result){
				$_SESSION['tel']=$_REQUEST['tel'];
				header('location:../Prestataires/renseignement.php');
			}
			else{
				echo "ERREUR!!!!!!!!!!!!!!!!!!!!!!!!!";
			}
		}//fin de l'inscription
		// completer renseignement
		if(isset($_POST['servi'])AND isset($_POST['couverture']) AND isset($_POST['log']) AND isset($_POST['log']) AND isset($_POST['price'])){
			$dossier="../images/profiles/";
			$fiche="default.png";
			if(!empty($_FILES["photo"]["name"])){
            $fiche=$_FILES["photo"]["name"];
            copy($_FILES["photo"]["tmp_name"],$dossier.$fiche);
            }
			$query="update prestataire set login='".$_POST['log']."',password='".sha1($_POST['pwd'])."',service='".$_POST['servi']."',margePrix='"
			.$_POST['price']."',rayonCouverture='".$_POST['couverture']."',photo='".$fiche."' where tel='".$_SESSION['tel']."'";
			var_dump($query);
			$result=mysql_query($query);
			if($result){
				var_dump($result);
				header("location:../Prestataires/mainPrestataire.php");
			}
			else{
				echo "<script type='text/javascript'> alert('ERREUR VERIFIER BIEN LES CHAMPS')</script>";
			}
		}

		//connexion
		if(isset($_REQUEST['logi']) AND isset($_REQUEST['pwd1']) AND isset($_REQUEST['connex'])){
		
		$query="select*from prestataire where login='".$_REQUEST['logi']."' and password='".sha1($_REQUEST['pwd1'])."'";
        $result=mysql_query($query);
		if($ligne=mysql_fetch_row($result)){
			$_SESSION['login']=$_REQUEST['logi'];
			$_SESSION['erreur']=false;
			header("location:../Prestataires/account.php");
		}else{
			$_SESSION["erreur"]=true;
			header("location:../Prestataires/mainPrestataire.php");
		}
	}

	}
}
?>
</body>
</html>