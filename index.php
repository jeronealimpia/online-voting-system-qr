<?php
include('login.php'); // Includes Login Script
?>
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        Login | Lan-Based Voting System
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<div id="wrapper">

	<form name="login-form" class="login-form" action="" method="post">
	
	
			<input type="hidden" name="date" id="date" readonly ><br/>
			<script>
			document.getElementById("date").value = Date();
			</script> 
	
		<div class="header">
		<center><h1>Welcome to MCWDEAP<br></h1><center>
		<span>Lan-Based Computerized Voting System</span>
		</div>
		
		<section class="col col-2">
						<label class="select">
						<b>Login as:</b>
							<select name="account">
								<option value="User">Voter</option>
								<option value="Admin">Admin</option>
								
							
							</select>
							
							<i></i>
						</label>	
		</section>
	
		<div class="content">
		<input id="name" name="username" type="text" class="input username" placeholder="Username" autofocus="autofocus"/>
		<div class="user-icon"></div>
		<input id="password" name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="Login" class="button" />
		<a href="signup.php"><input value="Sign Up" class="button" style="width:60px ;float:left;"></a>
		
		
		</div>
	
	</form>
<a href="forgotpass.php">forgot password</a>
</div>
<div class="gradient"></div>


</body>
</html>
