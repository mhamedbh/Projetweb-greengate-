<?php
	include '../Controller/CommentC.php'; 
	$commentC=new CommentC();
	$commentC->supprimerComment($_GET["id_c"]);
	header('Location:forum.php');
?>