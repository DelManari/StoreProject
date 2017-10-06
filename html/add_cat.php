<?php
session_start();
$_SESSION['message']='';
$_SESSION['messages']='';

$dbname = 'storeproject';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';
$connect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
$username = $_SESSION['username'];
$query = "SELECT id FROM user WHERE username ='$username'";
$result = $connect->query($query);
$row =  mysqli_fetch_array ($result);
$id= $row['id'];


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$cat_name =$_POST['cat_name'];

	//cat_name verification
				$query = "SELECT name FROM categorie WHERE name ='$cat_name'";
				$result = $connect->query($query);
				$numRows = $result->num_rows;
				if($numRows == 0)
				{
					//add cat
					$sql = "INSERT INTO categorie(name,added_by)"."VALUES('$cat_name','$id')";
						//if the qury successful redirect to welcome page
			
						if($connect->query($sql)==true){
							$_SESSION['messages']="categorie Added Succesfully ! Added $cat_name to the database";
						}else{
							$_SESSION['message']="Addtion Failed !";

						}
				}else{
					$_SESSION['message']="$cat_name Already exist";

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
    <h1>Create Categorie</h1>
    <form class="form" action="add_cat.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="alert alert-success"><?= $_SESSION['messages']?></div>
      <div class="alert alert-error"><?= $_SESSION['message']?></div>
	  <input type="text" placeholder="Categorie Name" name="cat_name" required />
	  <input type="submit" value="Add" name="add_cat" class="btn btn-block btn-primary" />
	  <input type="button" href="html\index.php" class="btn btn-block btn-primary " value="Home" onclick="location.href='html/index.php';"  />
	</form>
  </div>	
</div>
</body>


