
<?php
	  	if(isset($_POST['valid2']) && $_POST['valid2']=='Valider'){
	   	 if (!isset($_POST['ss'])) {
	          $erreur = 'La variable nécessaire au script n est pas définie.';
	        }
	        else {
	          // on teste si les variables ne sont pas vides
	          if (empty($_POST['ss'])) {
	            $erreur = 'le champs est vide.';
	          }

	        }
	  }
	  else{
	  	 	$base = mysql_connect('localhost','root','');
    		mysql_select_db('goorgoorluu',$base);
	  		$sS=$_POST['ss'];
	  		$sql =  " delete from service where libelle='$sS'";
	  		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
	  		echo '<script> alert("Le service a ete bien supprimer ");
	  				document.location.href ="admin.php";
	  		      </script>';
	  	
	  		mysql_close();
	  		}

  ?>