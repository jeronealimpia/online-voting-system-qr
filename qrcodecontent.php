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
</head> 



 <!-- main content -->
    <div id="content">
      <!-- section 1 -->
	 <section id="addcandidate">
        <!-- article 1 -->
        <article>
          <h2><a href="#">Generate Qrcode</a></h2><br>
         
        <!-- article 2 -->
	   <article>
           
		  		
			<ul class="tabs">
			<li><a href="#bysection">Qrcode</a></li>
			
			</ul>
			
			
			
	



	
<form id ="bysection" action="generate.php" method="post" class="sky-form" enctype="multipart/form-data" >
<header>	
							
	Generate Per Department
</header>
		<fieldset>	
		
		<div class="row">
					<section class="col col-6">
							<label class="input">
							<b>Date</b>
								<input  id="date" name="date" readonly>
							</label>
						</section>
						<script>
					document.getElementById("date").value = Date();
					</script>	
						
						
						
						
						
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
			
			
			<section class="input">
			
							
								<input id="b" name="randomnum" placeholder="Type the number" type="text" value= "<?php echo(rand(111,999)); ?>" style="display:none;">
							
								<input id="c" name="datenum" placeholder="Type the number" type="text" value= "<?php echo date('md')?>" style="display:none;">

								<input id="d" name="qrcode" type="text" style="display:none;"  >
							
			</section>	




<script type="text/javascript">				
				function makeCode() {		
	
		var b,c,d;
				
				b = document.getElementById("b").value;
				c = document.getElementById("c").value;	
				document.getElementById("d").value = b+c;
				//text = document.getElementById("text");
	
	qrcode.makeCode(text.value);
}

makeCode();
</script>	

</fieldset>	
				<footer>
					<button type="submit" class="button" onclick="makeCode()" >Generate</button>
					
					
				</footer>			
</form>
			
			
	



	
		
		
	
		
		
		
		
		
		
        </article>
	</section>
	
	

    </div>
    <!-- / content body -->
    <div class="clear"></div>
  </div>
  
  
  
  