<?php
	header('Content-type:text/html;charset=utf-8');

	$username=$_POST['username'];
	// $username=$_GET['username'];

	if($username=='admin'){
		echo 'false';
	}else{
		echo 'true';
	}
?>