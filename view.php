<?php
include('session.php');

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");	

$query = mysql_query("select * from voteusers where username='".$_GET['id']."'");
$row = mysql_fetch_array($query);


$image = mysql_query("SELECT * FROM voteusers where username='".$_GET['id']."'");
$rows = mysql_fetch_assoc($image);

$mime = null;
$imgsrc = "data:".$mime.";base64," . base64_encode($rows["image"]);

?>

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		
	
		
</head>

<body class="bg-cyan">

		<div class="body body-s">
		
<form class="sky-form" enctype="multipart/form-data">
				<header>		
					
				User Info
				
										
				</header>
				
				<fieldset>	
						
							<section><center><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 130px; width: 110px;">';?></center></section>
			<section>
						<label class="select" >
						<b>Job Position</b>
							<select name="jobposition">
								<option value="<?php echo $row['jobposition']; ?>" ><?php echo $row['jobposition']; ?></option>				
							</select><i></i>
			</section>			
							
				<div class="row">
						<section class="col col-6">
							<label class="input">
							<b>First Name</b>
								<input name="fname" type="text" value="<?=$row['fname']?>" readonly>
								
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
							<b>Last Name </b>
								<input name="lname" placeholder="Last name" type="text" value="<?=$row['lname']?>" readonly>
								
							</label>
						</section>
					</div>
				
					<section>
							<label class="select">
							<b>Department</b>
								<select name="department">
							<option value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
							</select>
							<i></i>
						</label>
						</section>

				
					</fieldset>
					
					
							
				<footer>
				
					<a href="report.php#log"><img src="img/arrow_left.png" width="50px"></a>
					
					
				</footer>
			</form>

			
			








</div>
 
</body>

