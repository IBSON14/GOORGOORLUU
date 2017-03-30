
<?php
	  	if(isset($_POST['valid4']) && $_POST['valid4']=='Valider'){
	   	 if (!isset($_POST['szc'])) {
	          $erreur = 'La variable nécessaire au script n est pas définie.';
	        }
	        else {
	          // on teste si les variables ne sont pas vides
	          if (empty($_POST['szc'])) {
	            $erreur = 'le champs est vide.';
	          }

	        }
	  }
	  else{
	  	 	$base = mysql_connect('localhost','root','');
    		mysql_select_db('goorgoorluu',$base);
	  		$sC=$_POST['szc'];
	  		$sql =  " delete from zonecouverture where nom='$sC' ";
	  		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
	  		echo '<script> alert("La zone ete a ete bien supprimee ");
	  					document.location.href ="admin.php";
	  		      </script>';
	  	
	  		mysql_close();
	  		}

  ?>