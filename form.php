<?php 

session_start();
$_SESSION['message']='';

$dbname = 'storeproject';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';
$connect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//password confirmation
	if($_POST['password'] == $_POST['confirmpassword']){
		$username =$_POST['username'];
		$email =$_POST['email'];
		$password =$_POST['password'];
		$_SESSION['username'] =$username;
		$sql = "INSERT INTO user(username,password,email)"."VALUES('$username','$password','$email')";
		//if the qury successful redirect to welcome page
		if($connect->query($sql)==true){
			$_SESSION['message']="Registration Succesful ! Added $username to the database";
			header("location:welcome.php");
		}else{
			$_SESSION['message']="Registration Failed !";

		}

	}else{
		$_SESSION['message']="Passwords do not match !";
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
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message']?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>