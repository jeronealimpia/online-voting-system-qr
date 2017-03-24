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
	 <section id="addcandidate">
        <!-- article 1 -->
        <article>
          <h2><a href="#">Add Candidate</a></h2><br>
         
        <!-- article 2 -->
	   <article>
           
		  
			
			
		<form action="addcan.php" method="post" class="sky-form" enctype="multipart/form-data">
				<header>Registration form</header>
				<fieldset>
				
			<section>
						<label class="select">
						<b>Candidate Running Position</b>
							<select name="canposition">
								<option value="" >--Select Position--</option>
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
							<b>First Name</b>
								<input name="fname" placeholder="First Name" type="text"
								maxlength="20" 
								onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}" >
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
							<b>Last Name</b>
								<input name="lname" placeholder="Last Name" type="text" 
								maxlength="20" 
								onkeydown="return alphaOnly(event);"  
										onblur="if (this.value == '') {this.value = '';}"
										onfocus="if (this.value == 'Type Letters Only') {this.value = '';}" >
							</label>
						</section>
					</div>
					
						
						<section>
							<label class="input">
							<b>Employee No.</b>
								<input name="empno"placeholder="Employee Number" type="number"
								maxlength="20"  
								>
								<b class="tooltip tooltip-bottom-right">Employee Number</b>
							</label>
						</section>
						
					<div class="row">
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
						
					<section class="col col-6">
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
					
					
					<div class="row">
					<section class="col col-6">
						<label class="select">
						<b>Gender</b>
							<select name="gender">
							
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
							</select>
							<i></i>
						</label>
					</section>
					
					<section class="col col-6">
						<label class="input">
							<b>Age</b>
							<input name= "age" placeholder="Age" type="number"  
										maxlength="20">
							<b class="tooltip tooltip-bottom-right">Age</b>
						</label>
					</section>
				</div>
				
				
				<section>
						<label class="input">
							
							<img id="blah" src="img/cam.png" alt="your image" /><b>Profile Picture</b>
							<input type="file" name="image" onchange="readURL(this);" accept="image/*">
						    
						</label>
			</section>	
		
					
						
				</fieldset>
				
				
			
					
				
				<footer>
				
				
					<button type="submit" class="button">Submit</button>
					<button type="RESET" class="button">Clear</button>
				</footer>
			</form>
		
		
	
		
		
		
		
		
		
        </article>
	</section>
	

    </div>
    <!-- / content body -->
    <div class="clear"></div>
  </div>
  
  
  
  