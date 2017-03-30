
<?php
	  	if(isset($_POST['valid3']) && $_POST['valid3']=='Valider'){
	   	 if (!isset($_POST['azc'])) {
	          $erreur = 'La variable nécessaire au script n est pas définie.';
	        }
	        else {
	          // on teste si les variables ne sont pas vides
	          if (empty($_POST['azc'])) {
	            $erreur = 'le champs est vide.';
	          }

	        }
	  }
	  else{
	  	 	$base = mysql_connect('localhost','root','');
    		mysql_select_db('goorgoorluu',$base);
	  		$ajC=$_POST['azc'];
	  		$sql =  " INSERT INTO zonecouverture(nom) VALUES('$ajC') ";
	  		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
	  		echo '<script> alert("La zone ete a ete bien ajoute ");
	  					document.location.href ="admin.php";
	  		      </script>';
	  	
	  		mysql_close();
	  		}

  ?>