
<head>

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

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Ballot Form</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="/automatedvote/css/sky-forms.css">
		<link rel="stylesheet" href="/automatedvote/css/layout.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css" media="all" />	

<meta charset="iso-8859-1">
<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
<link rel="stylesheet" href="css/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<!-- Add jQuery library -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fbox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="fbox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fbox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fbox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fbox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fbox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" href="fbox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fbox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="fbox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fbox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- fancy box js -->
<script type="text/javascript">
$("document").ready(function(){
	$(".add").fancybox();
	});
</script>

<script type="text/javascript">
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
</script>
		
</head>
	
	
 <!-- main content -->
    <div id="content">
      <!-- section 1 -->
	 <section id="addemployee">
        <!-- article 1 -->
        <article>
          <h2><a href="#">Add Employee</a></h2><br>
         
        <!-- article 2 -->
	   <article>
		
			<form action="master.php" method="post" class="sky-form">
				<header>Add Employee</header>
				
				<fieldset>	
					<div class="row">	
					<section class="col col-6">
						<label class="input" >
							
							<input name= "fname" placeholder="First Name" type="text" autofocus="autofocus"
										maxlength="20" 
										 onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"
										>
							<b class="tooltip tooltip-bottom-right">First Name</b>
						</label>
					</section>
					
					<section class="col col-6">
						<label class="input">
							
							<input name= "lname" placeholder="Last Name" type="text"  
										maxlength="50" 
										onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"	>
							<b class="tooltip tooltip-bottom-right">Last Name</b>
						</label>
					</section>
					</div>
					
					
					<div class="row">
					<section class="col col-6">
						<label class="input">
							<b>Employee No.</b>
							<input name="empno" placeholder="Employee ID" type="number" autocomplete="off">
							<b class="tooltip tooltip-bottom-right">Employee ID</b>
							
						</label>
						
					</section>
					
					<section class="col col-6">
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
					</div>	
				</fieldset>
				<footer>
			
				
					<button type="submit" class="button">Submit</button>
						<button type="RESET" class="button">Clear</button>
				</footer>
			</form>
			
	 </article>
	</section>
	
	
	
	
	
	
	
	
	



	

	
			<form id='vote' action="submit.php?qr=<?php echo $qrcode;?>" method="post" class="sky-form">
				<center><header>Memberlist</header></center>
				
				<fieldset>
		
	
				
				
<aside id="president">					
    <nav>
        <ul>

<div class="clear">
			
		</div>		
		
	
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM emp order by idno asc ");
$mime = null;

		while($row = mysql_fetch_assoc($sql))
			{ 
				
				$fname =$row['f_name'];
				$lname =$row['l_name'];
				$id =$row['emp_id'];
				
				
		?>	
		
		
		<tr>
		
        <td><?php echo $id;?> &nbsp &nbsp<?=$row['f_name']?> <?=$row['l_name']?></td><hr><br>
			
		</tr>
		
		
		<?php
			}
		?>
        </ul>
</nav>
</aside>					
</fieldset>						
								
					
			</form>
			
		</div>
	


	

    </div>
    <!-- / content body -->
    <div class="clear"></div>
  </div>
  