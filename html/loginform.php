<?php 

session_start();
$_SESSION['message']='';
$_SESSION['login'] ='';



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

	$username =$_POST['username'];
	$password =$_POST['password'];
	$query = "SELECT username,password FROM user WHERE username ='$username' and password = '$password'";
	$result = $connect->query($query);
	$numRows = $result->num_rows;
	if($numRows == 0)
	{
		$_SESSION['message']="Username or Password incorrect";
		$_SESSION['login'] ='fail';
	}
	else{
			$_SESSION['username'] =$username;
			$_SESSION['login'] ='succes';

			header("location:LoginWelcome.php");

		}
}
?>


<head>
<link rel="stylesheet" type="text/css" href="..\css\Style.css">
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="body-content">
  <div class="module">
    <h1>Login To an account</h1>
    <form class="form" action="loginform.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message']?></div>
	  <input type="text" placeholder="User Name" name="username" required />
	  <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
	  <input type="submit" value="Login" name="login" class="btn btn-block btn-primary" />
	</form>
  </div>	
</div>
</body>
