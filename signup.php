<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");
$query2 = mysql_query("select * from session where  reg = 'Start'");	
$rows2 = mysql_num_rows($query2);
if ($rows2 == 1) 
{$start = 'Start';}
else
{$start = 'Close';}	


if($start == 'Close'){
echo "<script>alert('Sorry but the registration is now officially closed.');history.back();</script>"; 	
}
else
{
?>

<head>


<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Voting Register</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.pwdMeter.js"></script>
		
		
	
	<script type="text/javascript">
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
</script>
	
    <style>
        .veryweak{
            color:#B40404;
        }
        .weak{
            color:#DF7401;
        }
        .medium{
            color:#FFFF00;
        }
        .strong{
            color:#9AFE2E;
        }
        .verystrong{
            color:#0B610B;
        }
    </style>
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
		
			<script type="text/javascript">
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
</script>
		
	</head>
	
	
	<body class="bg-cyan">
	

		<div class="body body-s">
		
			<form action="sign.php" method="post" class="sky-form">
				<header>Sign Up</header>
				
				<fieldset>	
						
					<section>
						<label class="input">
							
							<input name= "fname" placeholder="First Name" type="text" autocomplete="off" autofocus="autofocus"
										maxlength="20" 
										 onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"
										>
							<b class="tooltip tooltip-bottom-right">First Name</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							
							<input name= "lname" placeholder="Last Name" type="text"  
										maxlength="50" autocomplete="off"
										onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"										>
							<b class="tooltip tooltip-bottom-right">Last Name</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							
							<input name="empno" placeholder="Employee ID" type="number" autocomplete="off">
							<b class="tooltip tooltip-bottom-right">Employee ID</b>
							
						</label>
						
					</section>
					
					
						
				</fieldset>
				<footer>
				<a href="index.php"><img src="img/arrow_left.png" width="50px"></a>
				
					<button type="submit" class="button">Submit</button>
				</footer>
			</form>
			
		</div>
	</head>

<?php
}
?>