<?php 
SESSION_START();
$_SESSION = array();
session_destroy();
?>
<span class="user">logout SUCCES</span>
<?php 			header("location:index.php"); ?>
