<?php
include('session.php');

$query = mysql_query("select * from candidate where can_id='".$_GET['can_id']."'");
$row = mysql_fetch_array($query);


$image = mysql_query("SELECT * FROM candidate where can_id='".$_GET['can_id']."'");
$rows = mysql_fetch_assoc($image);

$mime = null;
$imgsrc = "data:".$mime.";base64," . base64_encode($rows["can_image"]);

?>

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		
		
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
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
</script>		
		
</head>

<body class="bg-cyan">

		<div class="body body-s">
		
<form action="editcan.php" method="post" class="sky-form" enctype="multipart/form-data">
				<header>		
					
				Edit Candidate	
				<input type='hidden' name="can_id" value="<?=($_GET['can_id'])?$_GET['can_id']:''?>">
										
				</header>
				
				<fieldset>	
						
							<section><center><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 130px; width: 110px;">';?></center></section>
			<section>
						<label class="select">
						<b>Candidate Running Position</b>
							<select name="canposition">
								<option value="<?php echo $row['can_position']; ?>" ><?php echo $row['can_position']; ?></option>
								<option value="President">President</option>
								<option value="Vice-President">Vice-President</option>
								<option value="Secretary">Secretary</option>
								<option value="Treasurer">Treasurer</option>
								<option value="Auditor">Auditor</option>
								<option value="PIO">P.R.O</option>
								<option value="BOD">Board of Directors</option>
								
							</select><i></i>
			</section>			
							

				<div class="row">
						<section class="col col-6">
							<label class="input">
							<b>Change First Name</b>
								<input name="fname"placeholder="First name" type="text" value="<?=$row['can_fname']?>"
										maxlength="20" 
										onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}		
								">
								<b class="tooltip tooltip-bottom-right">Change First Name</b>
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
							<b>Change Last Name </b>
								<input name="lname" placeholder="Last name" type="text" value="<?=$row['can_lname']?>"
										maxlength="20" 
										onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}
								">
								<b class="tooltip tooltip-bottom-right">Change Last Name</b>
							</label>
						</section>
					</div>
				
					<section>
							<label class="select">
							<b>Change Department</b>
								<select name="department">
							<option value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
								<option value="Finance">Finance</option>
								<option value="Engineering">Engineering</option>
								<option value="Commercial">Commercial</option>
							</select>
							<i></i>
						</label>
						</section>

				
					</fieldset>
					
					
					<fieldset>
					
					
			<section>
						<label class="input">
							<b>Change Picture</b>
							
							<input type='file' name="image" onchange="readURL(this);" accept="image/*">
						    <center><img id="blah" src="#" alt="your image" /></center>
						</label>
					</section>
					
					
					
				</fieldset>
					
				
				<footer>
				
					<a href="setting.php"><img src="img/arrow_left.png" width="50px"></a>
					<a style="display:none;"href="remove.php?id=<?=($_GET['can_id'])?$_GET['can_id']:''?>">Remove</a>
					<button type="submit" class="button">Update</button>
					
				</footer>
			</form>

			
			








</div>
 
</body>

