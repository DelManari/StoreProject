<link rel="stylesheet" type="text/css" href="..\css\Style.css">
<?php session_start();?>
<div class="body content">
<div class="welcome">
    <div class="alert alert-success"><?= $_SESSION['message']?></div>
	Welcome<span class="user"><?= $_SESSION['username']?></span>
	
	<?php 
	
	$dbname = 'storeproject';
	$dbuser = 'root';
	$dbpass = '';
	$dbhost = 'localhost';
	$mysqli = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
	$sql    = 'SELECT username FROM user';
	$result = $mysqli->query($sql);
	?>
	
	<div id="registered">
	<span>All registered users : </span>
	<?php 
	while($row = $result->fetch_assoc()){
	echo "<div class='userlist'><span>$row[username]</span></div>";
	}
	
	?>
	</div>
	
</div>
</div>
