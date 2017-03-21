
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>recherche de service</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/styleuserrecherche.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https:\\fonts.googleapis.com\icon?family=Material+Icons"/>
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="wrap">

		<div id="header">
			<p><img src="images" style="float: right;margin: 1em 2em;"></p>
		</div>

		<div id="content-wrap">
			<div id="content">	
            <nav>
            	<ul class="menu">
            		<li><a href="?page=acceuil" name="active"><span class="glyphicon glyphicon-home"></span>Acceuil</a></li>
            		<li><a href="?page=usercomment" name="active"><span class="glyphicon glyphicon-comment"></span>Commentaire</a></li>
            		<li><a href="?page=noterprestataire" name="active"><span class="glyphicon glyphicon-file"></span>Note</a></li>
            		
            	</ul>
            </nav>
            <?php
            if(isset($_GET['page'])){
            	$page=$_GET['page'];
            
            switch ($page) {
            	case 'acceuil':
            		include 'acceuil.php';
                    ?>
                    <script type="text/javascript">
                        document.getElementsByName('active')[0].style.background='#FC5D5D';
                    </script>
                    <?php
            		break;
            	case 'usercomment':
            		include 'commentaireuser.php';
                     ?>
                    <script type="text/javascript">
                        document.getElementsByName('active')[1].style.background='#FC5D5D';
                    </script>
                    <?php
            		break;
            	case 'noterprestataire':
            		include 'noterprestataire.php';
                     ?>
                    <script type="text/javascript">
                        document.getElementsByName('active')[2].style.background='#FC5D5D';
                    </script>
                    <?php
            		break;
            	default:
            		include 'acceuil.php';
                     ?>
                    <script type="text/javascript">
                        document.getElementsByName('active')[0].style.background='#FC5D5D';
                    </script>
                    <?php
            		break;
            }
        }else{
        include 'acceuil.php';  
        }
        ?>
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