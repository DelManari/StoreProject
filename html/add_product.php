<?php
session_start();
$_SESSION['message']='';
$_SESSION['messages']='';
	//$_SESSION['username']='mtir96';

$dbname = 'storeproject';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';
$connect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
//determier id seller
$username = $_SESSION['username'];
$query = "SELECT id FROM user WHERE username ='$username'";
$result = $connect->query($query);
$row =  mysqli_fetch_array ($result);
$id_seller= $row['id'];




if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$id_cat = $_POST['cat'];
	$label =$_POST['label'];
	$qte =$_POST['qte'];
	$prix =$_POST['prix'];

	
					$sql = "INSERT INTO product(label,id_cat,id_seller,qte,prix)"."VALUES('$label','$id_cat','$id_seller','$qte','$prix')";
						//if the qury successful redirect to welcome page1
			
						if($connect->query($sql)==true){
							$_SESSION['messages']="product Added Succesfully ! Added $label to the database";
						}else{
							$_SESSION['message']="Addtion Failed !!";

						}

}

?>


<head>
<link rel="stylesheet" type="text/css" href="css\Style.css">
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="body-content">
  <div class="module">
    <h1 style="color:white;">Add new Product</h1>
    <form class="form" action="add_product.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="alert alert-success"><?= $_SESSION['messages']?></div>
      <div class="alert alert-error"><?= $_SESSION['message']?></div>
	  <input type="text" placeholder="Lable" name="label" required />
	  <input type="text" placeholder="Quantity" name="qte" required />
	  <input type="text" placeholder="Prix" name="prix" required />
	  <select name="cat">
<?php 
$sql = mysqli_query($connect, "SELECT name,id FROM categorie");
while ($row = $sql->fetch_assoc()){
echo "<option value=". $row['id'].">" . $row['name'] . "</option>";
}
?>
</select>


	  <input type="submit" value="Add" name="add_cat" class="btn btn-block btn-primary" />
	  <input type="button" href="html\index.php" class="btn btn-block btn-primary " value="Home" onclick="location.href='html/index.php';"  />
	</form>
  </div>	
</div>
</body>


