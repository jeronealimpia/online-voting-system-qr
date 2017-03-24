<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");

$query = mysql_query("select * from voteusers where emp_id='".$_GET['Id']."'");
$row = mysql_fetch_array($query);

?>

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		
		
		
<script type="text/javascript">
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
</script>		
		
</head>

<body class="bg-cyan">

		<div class="body body-s">
		
<form action="updateaccount.php" method="post" class="sky-form" enctype="multipart/form-data">
				<header>		
					
				Edit Account	
				<input type='hidden' name="id" value="<?=($_GET['Id'])?$_GET['Id']:''?>">
										
				</header>
				
				<fieldset>	
						
								
					
				<section>
						<label class="input">
							<b>Change Email</b>
							<input name= "email" value="<?=$row['email']?>" type="text"  
										maxlength="50"  autocomplete="off">
							<b class="tooltip tooltip-bottom-right">Enter Valid Email Address</b>
						</label>
					</section>
					
					
					
					<section>
					<label class="input">
							<b>Change Username</b>
							<input  name="username" placeholder="Username" type="text" value="<?=$row['username']?>"
										maxlength="20" 
										onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}
							">
							<b class="tooltip tooltip-bottom-right">Change Partylist</b>
						</label>	
					</section>
					</fieldset>
					
					
					<fieldset>
					
					
					<section>
						<label class="input">
							<b>Old Password</b>
							<input name= "oldpassword" placeholder="Old Password" type="password" value="">
							<b class="tooltip tooltip-bottom-right">Old Password</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<b>New Password</b>
							<input name= "newpassword" placeholder="New Password" type="password" value="">
							<b class="tooltip tooltip-bottom-right">New Password</b>
						</label>
					</section>
					
					
					
					
				</fieldset>
					
				
				<footer>
				
					<a href="home.php"><img src="img/arrow_left.png" width="50px"></a>
					<button type="submit" class="button">Update</button>
					
				</footer>
			</form>









</div>
 
</body>

