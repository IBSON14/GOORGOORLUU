 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="admin.css"/>
	<!-- <![if lt IE 7]> -->
<!-- <![endif]-->

		<script type="text/javascript">
		function hideThis(_div){
		    var obj = document.getElementById(_div);
		    if(obj.style.display == "block")
		        obj.style.display = "none";
		    else
		        obj.style.display = "block";
		}
		</script>
</head>
<body>
<div id="wrap">

	<div id="header">
		<p><img src="../images/logo.jpg" style="float: right;margin: -0.8em 2em; width:80px; height: 55px;"></p>
	</div>

	<div id="content-wrap">
		<div id="content">

		<div class="field"  id="f1" style="float:left;margin-top:13em;margin-left:8em">
		
			<FORM id="form1" method="POST" action="page_traitement.php" style="margin-top:3em;margin-left:3em">
   					<input type="text" name="as" style="width:20em;" placeholder="Ajouter Service"/>
  					 <input type="submit" name="valid1" value="Valider" class="button" style="margin-left:5em;margin-top:2em"/>
			</FORM>
			
			
			<FORM id="form3" method="POST" action="page_traitement.php" style="margin-top:3em;margin-left:3em">
   					<input type="text" name="ss" style="width:20em;" placeholder="Supprimer Service"/>
  					 <input type="submit" name="valid2" value="Valider" class="button" style="margin-left:5em;margin-top:2em"/>
			</FORM>
			
		</div>
		
		
		<div class="field"  id="f2" style="float:right;margin-right:8em;margin-top:13em;">	
			<FORM id="form2" method="POST" action="page_traitement.php" style="margin-top:3em;margin-left:3em">
   					<input type="text" name="azc" style="width:20em;" placeholder="Ajouter Zone de couverture"/>
  					 <input type="submit" name="valid3" value="Valider" class="button" style="margin-left:5em;margin-top:2em"/>
			</FORM>
			
			
			
			
			<FORM id="form4" method="POST" action="page_traitement.php" style="margin-top:3em;margin-left:3em">
   					<input type="text" name="szc" style="width:20em;" placeholder="Supprimer Zone de couverture"/>
  					 <input type="submit" name="valid4" value="Valider" class="button" style="margin-left:5em;margin-top:2em"/>
			</FORM>
			
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