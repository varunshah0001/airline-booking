<!DOCTYPE html>
<html lang="en">
<head>
	<title>Airline System</title>
	<meta name="language" content="english" />
	<meta name="keywords" content="airprice, travel, cheap airfare, discount airfare" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/forcompany.css">
	<link rel="stylesheet" href="css/AdminSignin.css">
	<link rel="stylesheet" href="css/pswd.css">
	<link rel="stylesheet" href="css/manda.css">
	<script src="js/pswd.js"></script>
	<script src="js/manda.js"></script>
	<script src="js/formValidation.js"></script>
	<script src="js/checkUser.js"></script>
	<script src="js/login.js"> </script>
</head>
<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
                    <li id = "cart">
						<a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Trips</a>
					</li>


					<li class="dropdown" id = "new">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign In&nbsp;</span><span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						  <li><a href="signup.php">Register</a></li>
						  
						  <li class="dropdown-submenu">
							<a tabindex="-1" href="#">Sign in</a>
							<ul class="dropdown-menu">
							  <li><a href="customersignin.php">Customer Sign in</a></li>
							  </li>
						
					
							</ul>
						  </li>
						
						</ul>
					</li>
					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcom!</span>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							<li><a href="showhistory.php">History</a></li>							
							<li><a href="#" id="logout">Sign out</a></li>
						</ul>
						</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center">
		<h1>Airline Reservation System</h1> 
		<p>We help you to fly.......!</p> 
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Sign Up</h2>
		</div>
		<form name="myForm" onsubmit="return validateForm()" class="form-horizontal" role="form" action="register.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="username"><span style="color:red;">*</span> Username:</label>
				<div class="col-sm-6">
					<input type="username" class="form-control" id="username" placeholder="only alphabetical or numeric characters" name="username">
				</div>
				<div class="col-sm-2">
					<input type="button" class="btn btn-success btn-block" id="check_username_availability" value="Check Availability">
					
				</div>
				<span class="error">Username is required</span>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6" id="username_availability_result">
				</div>
			</div>

			
			<div class="form-group">
				<label class="control-label col-sm-2" for="firstname"><span style="color:red;">*</span> First Name:</label>
				<div class="col-sm-6">
					<input type="firstname" class="form-control" id="firstname" placeholder="Enter Your First Name" name="firstname">
				</div>
				<span class="error">First Name is required</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="middlename">Middle Name:</label>
				<div class="col-sm-6">
					<input type="middlename" class="form-control" id="middlename" name="middlename" placeholder="Enter Your Middle Name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="lastname"><span style="color:red;">*</span> Last Name:</label>
				<div class="col-sm-6">
					<input type="lastname" class="form-control" id="lastname" placeholder="Enter Your Last Name" name="lastname">
				</div>
				<span class="error">Last Name is required</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email"><span style="color:red;">*</span> Email:</label>
				<div class="col-sm-6">
					<input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
				</div>
				<span class="error">Email is required</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="gender">Gender:</label>
				<div class="col-sm-6">
					<label class="radio-inline">
						<input type="radio" name="gender" value="Female">Female
					</label>
					<label class="radio-inline">
						<input type="radio" name="gender" value="Male">Male
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="birthday">Birthday:</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="birthday" name="birthday">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="tel"><span style="color:red;">*</span> Phone:</label>
				<div class="col-sm-6">
					<input type="tel" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="phone">
				</div>
				
      
				<small>Format: 123-456-7890</small>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd1"><span style="color:red;">*</span> Password:</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="pwd1" placeholder="No special characters, at least one letter, one capital letter, one number" name="pwd1">
				</div>
				<span class="error">Password is required</span>
			</div>
			<div class="form-group" id="pswd_info">
				<h4>Password must meet the following requirements:</h4>
				<ul>
					<li id="letter" class="invalid">At least one letter</li>
					<li id="capital" class="invalid">At least one capital letter</li>
					<li id="number" class="invalid">At least one number</li>
					<li id="length" class="invalid">At least 6 characters</li>
				</ul>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="Cpassword"><span style="color:red;">*</span>Repeat Password:</label>
				<div class="col-sm-6">
					<input type="tel" class="form-control" id="Cpassword" placeholder="Repeat Your Password" name="tel">
				</div>
				<span class="error">Password is required</span>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<button type="submit" class="btn btn-primary btn-block" name="btn-signup" id="signup">Sign Up</button>
				</div>
			</div>
		</form>
		<br /><br /><br />
	</div>
	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>Airline.com</p>		
	</footer>
</body>
</html>