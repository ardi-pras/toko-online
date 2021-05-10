<?php 
	
	$dbhost='localhost';
	$dbname='toko_online';
	$dbuser='root';
	$dbpass='';

	try{
		$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    	echo "Koneksi ke database $dbname berhasil.";
	}
	catch(PDOException $pe){
		die("koneksi database $dbname :" . $pe->getMessage());
	}
?>