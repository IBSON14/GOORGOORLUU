<?php
if (isset($_POST['valid1'])){
	$serv=$_POST['as'];
	if($serv){
		$connect=mysql_connect('localhost','root','') or die('Error');
			mysql_select_db('goorgoorluu');
			$reg=mysql_query("insert into service values($serv)")  or die ('Error');
			echo"<script language=\"javascript\">alert('Le service a bien été ajouté!')";
			echo"</script>";
	}
}
if (isset($_POST['valid2'])){
	$se=$_POST['ss'];
	if($se){
		$connect=mysql_connect('localhost','root','') or die('Error');
			mysql_select_db('goorgoorluu');
			$reg=mysql_query("delete from service where nom=$se")  or die ('Error');
			echo"<script language=\"javascript\">alert('Suppression réussie!')";
			echo"</script>";
	}
}
if (isset($_POST['valid3'])){
	$zc=$_POST['azc'];
	if($zc){
		$connect=mysql_connect('localhost','root','') or die('Error');
			mysql_select_db('goorgoorluu');
			$reg=mysql_query("insert into zonecouverture values($zc)")  or die ('Error');
			echo"<script language=\"javascript\">alert('La zone a bien été ajoutée!')";
			echo"</script>";
	}
}
if (isset($_POST['valid4'])){
	$sz=$_POST['szc'];
	if($sz){
		$connect=mysql_connect('localhost','root','') or die('Error');
			mysql_select_db('goorgoorluu');
			$reg=mysql_query("delete from zonecouverture where nom=$sz")  or die ('Error');
			echo"<script language=\"javascript\">alert('Suppression réussie!')";
			echo"</script>";
	}
}
?>