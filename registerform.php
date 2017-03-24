
<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("votedatabase") or die (mysql_error());
$query = mysql_query("select * from emp where emp_id='".$_GET['empno']."'");
$row = mysql_fetch_array($query);

?>


<head>


<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Voting Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.pwdMeter.js"></script>
		
		
		<script type="text/javascript">
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
		
		
		<script type="text/javascript">
        $(document).ready(function(){
 
                $("#password").pwdMeter();
 
            });
    </script>
	
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
		
		
		
	</head>
	
	
	<body class="bg-cyan">
	

		<div class="body body-s">
		
			<form action="register.php" method="post" class="sky-form" enctype="multipart/form-data">
				<header>Registration form</header>
				<fieldset>
					<div class="row">
						<section class="col col-6">
							<label class="input">
							<b>First Name</b>
								<input name="fname"value="<?=$row['f_name']?>" type="text"
								maxlength="20" 
								onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}" readonly>
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
							<b>Last Name</b>
								<input name="lname" value="<?=$row['l_name']?>" type="text" 
								maxlength="20" 
								onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}" readonly>
							</label>
						</section>
					</div>
					
						
						<section>
							<label class="input">
							<b>Employee No.</b>
								<input name="empno"value="<?=$row['emp_id']?>" type="number"
								maxlength="20"  readonly
								>
							</label>
						</section>
						
					<div class="row">
					<section class="col col-7">
						<label class="select">
						<b>Department</b>
							<select name="department">
							<option value="">--Select Department--</option>
								<option value="Finance">Finance</option>
								<option value="Engineering">Engineering</option>
								<option value="Commercial">Commercial</option>
							</select>
							<i></i>
						</label>
					</section>
						
					<section class="col col-5">
						<label class="input">
							<b>Job Position</b>
							<input name= "position" placeholder="Job Position" type="text"  
										maxlength="20"
										onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"										>
							<b class="tooltip tooltip-bottom-right">Enter Your Job Position</b>
						</label>
					</section>
					</div>
					
					
					
					<section>
						<label class="select">
							<select name="gender">
							
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
							</select>
							<i></i>
						</label>
					</section>
					
				
					
		
					
						
				</fieldset>
				
				
				
				<fieldset>	
					
						<section>
						<label class="input">
							<b>Profile Picture</b>
							
							<input type="file" name="image" onchange="readURL(this);" accept="image/*">
						    <center><img id="blah" src="#" alt="your image" /></center>
						</label>
					</section>
					
					<section>
						<label class="input">
							
							<input name= "username" placeholder="Username" type="text" autocomplete="off" autofocus="autofocus"
										maxlength="20" 
										 
										>
							<b class="tooltip tooltip-bottom-right">Username</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							
							<input name= "email" placeholder="Email address" type="text"  
										maxlength="50"  autocomplete="off">
							<b class="tooltip tooltip-bottom-right">Enter Valid Email Address</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							
							<input id="password" name="password" placeholder="Password" type="password" >
							<b class="tooltip tooltip-bottom-right">Password</b>
							 <span id="pwdMeter" class="neutral"></span>
							
						</label>
						
					</section>
					
					<section>
						<label class="input">
							
							<input name="repassword" placeholder="Confirm Password" type="password" >
							<b class="tooltip tooltip-bottom-right">Confirm Password</b>
						</label>
					</section>
					
				
					<div class="row">
					<section class="col col-7">
						<label class="select">
						<b>Secrete Question</b>
							<select name="question">
								<option value="What is the first name of the person you first kissed?">What is the first name of the person you first kissed?</option>
								<option value="What is the last name of the teacher who gave you your first failing grade?">What is the last name of the teacher who gave you your first failing grade?</option>
								<option value="What is the name of the place your wedding reception was held?">What is the name of the place your wedding reception was held?</option>
								<option value="What was the name of your elementary / primary school?">What was the name of your elementary / primary school?</option>
								<option value="In what city or town does your nearest sibling live?">In what city or town does your nearest sibling live?</option>
								<option value="What time of the day were you born?">What time of the day were you born?</option>
								<option value="What is your pet’s name?">What is your pet’s name?</option>
								<option value="In what year was your father born?">In what year was your father born?</option>
							</select>
							<i></i>
						</label>
					</section>
						
					<section class="col col-5">
						<label class="input">
							<b>Secret Answer</b>
							<input name= "answer" placeholder="Secret Answer" type="text">
							<b class="tooltip tooltip-bottom-right">This serve as your password retrieval.</b>
						</label>
					</section>
					</div>
				
				
				
				
				</fieldset>
					
				
				<footer>
				<a href="index.php"><img src="img/arrow_left.png" width="50px"></a>
				
					<button type="submit" class="button">Submit</button>
				</footer>
			</form>
			
		</div>
	</body>
	
	
	