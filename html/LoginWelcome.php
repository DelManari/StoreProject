<link rel="stylesheet" type="text/css" href="..\css\Style.css">
<?php session_start();?>
<div class="body content">
<div class="welcome">
    <div class="alert alert-success"><?= $_SESSION['message']?></div>
	Welcome<span class="user"><?= $_SESSION['username']?></span>
	<br/>
	<a href="index.php" class="user">click here to go to the home page</a> 
	</div>
</div>
