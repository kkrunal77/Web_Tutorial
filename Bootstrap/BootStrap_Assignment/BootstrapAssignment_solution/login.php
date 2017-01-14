<!DOCTYPE html>
<html>
<head>
	<title>e-commerce website</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<style type="text/css">
	.margin{
		padding-top: 68px;
	}
</style>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		    	<div class="container">
		    		<div class="navbar-header">
		    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		    				<span class="icon-bar"></span>
		    				<span class="icon-bar"></span>
		    				<span class="icon-bar"></span>
		    			</button>
		    		    <a href="index_solution.html" class="navbar-brand">Lifestyele store</a>   			
		    		</div>

		    		<div class="collapse navbar-collapse" id="myNavbar">
		    		    
		    			<ul class="nav navbar-nav navbar-right">
		    				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		    				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    			</ul>
		    		</div>    		
		    	</div>    	
		    </nav>
		    <br>
		    <br>
		    <br>
		   
		    <div class="container margin">
		<div class="row">
            <!-- PANEL BODY EXPs-->
		   
			<div class="col-xs-6 col-xs-offset-3">
			    <div class="panel panel-primary">
			        <div class="panel-heading">
	 					<h4>LOGIN</h4>
			        </div>
			    	<div class="panel-body">
			    		<div class="text-warning"><p>Login to make a purchase</p></div>
			    		<form>
						<div class="form-group">
							<label for="firstname"></label>
								<input type="text" class="form-control input-lg" name="firstname" placeholder="Email"></div>
							
							<div class="form-group">
							<label for="lastname"></label>
							<input type="text" class="form-control input-lg" name="lastname" placeholder="Password" >
						</div>
			    		</form>
			    		<button class="btn btn-primary">Login</button>
			    	</div>
			    	<div class="panel-footer">
			    		 Don't have an account? <span style="color: blue"><b>Register</b></span>
			    	</div>
				</div>
			</div>
		</div>
	</div>
    <br><br><br><br>
 <footer class="footer ">
 	<div class="container ">
 	<center>
 		<p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
    </center>
 	</div>	
 </footer>

</body>
</html>