<?php 
	$server		= "localhost"; 
	$user		= "root"; 
	$password	= ""; 
	$database	= "kuis";
	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}
	define('base_url', 'http://localhost/kuis/admin/');
?>