<?php 

	$dbuser = 'root';
	$dbpass = '';
	$dbhost = 'localhost';
	$conn = new mysqli($dbhost, $dbuser, $dbpass);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
$sql = "CREATE DATABASE storeprojectc";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}



    $sql = "use storeprojectc";
    $conn->query($sql);


$sqluser="CREATE TABLE `user` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `password` varchar(20) NOT NULL,
 `email` varchar(20) NOT NULL,
 PRIMARY KEY (`id`))";
if ($conn->query($sqluser) === TRUE) {
    echo "<br/>table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sqluser="CREATE TABLE `categorie` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(20) NOT NULL,
 PRIMARY KEY (`id`))";
if ($conn->query($sqluser) === TRUE) {
    echo "<br/>table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sqluser="CREATE TABLE `product` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `label` varchar(10) NOT NULL,
 `id_cat` int(11) NOT NULL,
 `id_seller` int(11) NOT NULL,
 `qte` int(11) NOT NULL,
 `prix` varchar(6) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_product_cat` (`id_cat`),
 KEY `fk_seller` (`id_seller`))";
if ($conn->query($sqluser) === TRUE) {
    echo "<br/>table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



?>