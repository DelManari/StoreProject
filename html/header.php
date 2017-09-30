

<?php 

session_start();
?>

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