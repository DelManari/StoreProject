	<style type="text/css">
	.asterisk_input:after {
content:" *"; 
color: #e32;
position: absolute; 
margin: 0px 0px 0px -20px; 
font-size: xx-large; 
padding: 0 5px 0 0; }
</style>
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
			//username verification
				$query = "SELECT username FROM user WHERE username ='$username'";
				$result = $connect->query($query);
				$numRows = $result->num_rows;
				if($numRows == 0)
				{
			//email verification
			        $query = "SELECT email FROM user WHERE email ='$email'";
					$result = $connect->query($query);
					$numRows = $result->num_rows;
					if($numRows == 0)
					{
						$sql = "INSERT INTO user(username,password,email)"."VALUES('$username','$password','$email')";
						//if the qury successful redirect to welcome page
			
						if($connect->query($sql)==true){
							$_SESSION['message']="Registration Succesful ! Added $username to the database";
							header("location:welcome.php");
						}else{
							$_SESSION['message']="Registration Failed !";

						}
					}
					else{

							$_SESSION['message']="Email Already Used";

					}
				}else{	
						$_SESSION['message']="username Already Used";
				}
		}
		else{
		$_SESSION['message']="Passwords do not match !";
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
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <span class="asterisk_input" ><div class="alert alert-error"><?= $_SESSION['message']?></div>  </span>            
      <span class="asterisk_input" > <input type="text" placeholder="User Name"  name="username" required />  </span>            
     <span class="asterisk_input" > <input type="email" placeholder="Email" name="email" required /> </span>      
     <span class="asterisk_input" > <input type="password" placeholder="Password" name="password" autocomplete="new-password" required /> </span>      
     <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />      
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>