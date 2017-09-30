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


</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" id="navv">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div id="navbar" class="navbar-collapse collapse">


                <ul class="nav navbar-nav navbar-left  " id="navvv">
				    <li>
                        <a href="#" class="navbar-brand">
                            <img src="#" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                             <i class="glyphicon glyphicon-home"></i> Home
                        </a>
                    </li>	
                    <li>
                        <a href="#">
                              <i class="glyphicon glyphicon-folder-open">  </i>  Category
                        </a>
                    </li>					

 
                </ul>
				<?php	
				 if(isset($_SESSION['username'])){ ?>
				<ul class="nav navbar-nav navbar-right" id="navvv">
					<li>
						<a href="#"><i><span>Welcome <?= $_SESSION['username']?></span>	</i></a>
					</li>
					<li>
						<a href="..\logout.php"><i><span>Logout</span>	</i></a>

					</li>
				</ul>	
				<?php
				}else{
				 ?>
				<ul class="nav navbar-nav navbar-right" id="navvv">

					<li>
						<a href="..\loginform.php">
						 <i class="glyphicon glyphicon-user"></i> Login
						</a>
					</li>
					<li>
						<a href="..\form.php">
						 <i class="glyphicon glyphicon-lock"> </i> Register
						</a>
					</li>
					<li>
				</li>
				</ul>
				<?php } ?>
            </div>
        </div>
    </nav>
    <footer class="navbar navbar-bottom navbar-fixed-bottom" id="myfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>  <i class="glyphicon glyphicon-question-sign"></i>  who are we</h3>
                    <p style="    color:#e7e7e7;  font-weight:bold; text-align:left;" dir="ltr">
                        .Who Are You est un single des Who issu de l'album Who Are You, paru en 1978. Il parut comme un single avec double face A, avec la composition de John Entwistle Had Enough sur l'autre face.
                   
				
				</p>
                </div>

                <div class="col-md-6">
                    <h3>
                        <i class="glyphicon glyphicon-envelope"> </i> Contact US
                    </h3>
                    <ul>
                        <li><a href="https://www.facebook.com/DelManari">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">E-mail</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="subfooter" id="sub">
            <span>all rights reserved SHOP-2017</span>
        </div>
    </footer>

			<div class="jumbotron jumbotron-fluid" style="margin-top:31px">
  <div class="container" >
  <div  class="col-md-6"><img class="img-thumbnail" src="..\images\online-shopping.jpg" alt="Thumbnail image" style="width:90%;    height:350px;"></div>
     <div  class="col-md-6"> <h1 class="display-3">E-store Services</h1>
  <p class="lead">Buy And Sell Goods Over the Internet Never Easier ! <br/>E-Store makes online shopping easier</p></div>
  </div>
</div>


</body>
</html>