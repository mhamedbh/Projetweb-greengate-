<?php
	include '../Controller/PostC.php'; 
	$postC=new PostC();
	$postC->supprimerPost($_GET["id_post"]);
	header('Location:forum.php');
?>