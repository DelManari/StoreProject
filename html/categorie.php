<?php 

session_start();
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="..\css\Style.css">
<title>E-store</title>
    <meta name="viewport" content="width=device-width,initial scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	$(function(){
		$("#header").load("header.php");
		$("#footer").load("footer.php");
		$("#categorie").load("../categorieList.php");

	});
</script>
</head>

<body>
    <div id="header"></div>
    <div id="categorie" style="margin:100px"></div>
    <div id="footer" ></div>


</body>
</html>