<?php
 mysql_connect("localhost","root","") or die (mysql_error());
 mysql_select_db("votedatabase") or die (mysql_error());

  if(empty($_POST['position']))
        { 
$pos = 'President';
		}
		else{
		
		$pos = ($_POST['position']);
		}
 
 
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM candidate where can_position like '$pos' order by votecount desc");
$mime = null;

$totalvoter = mysql_query("SELECT SUM(votecount) FROM candidate");
$row = mysql_fetch_array($totalvoter);
$sum = $row['SUM(votecount)'];

$x=0;
$a=0;
$b=0;
$c=0;

$vote[0]=0;
$vote[1]=0;
$vote[2]=0;
$vote[3]=0;
$vote[4]=0;
$vote[5]=0;
$vote[6]=0;

$percent[0]=0;
$percent[1]=0;
$percent[2]=0;
$percent[3]=0;
$percent[4]=0;
$percent[5]=0;
$percent[6]=0;


$name[0]="";
$name[1]="";
$name[2]="";
$name[3]="";
$name[4]="";
$name[5]="";
$name[6]="";

$l_name[0]="";
$l_name[1]="";
$l_name[2]="";
$l_name[3]="";
$l_name[4]="";
$l_name[5]="";
$l_name[6]="";

		while($row = mysql_fetch_assoc($sql))
			{ 
			
			$votes =$row['votecount'];
			$fname=$row['can_fname'];
			$lname=$row['can_lname'];
			$perc = $votes/$sum;
			
			
		
			
			$vote[$x]= $votes;
			$x=$x+1;
		
			$name[$a]=$fname;
			$a=$a+1;
			
			$l_name[$b]=$lname;
			$b=$b+1;
			
			
			$percent[$c]=$perc;
			$c=$c+1;
			}
			
			
	


	?>

<head>
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Top <?php echo $x;?>  Chart for <?php echo $pos; ?>"
      },
       data: [
      {
         type: "pie",
       showInLegend: true,
       dataPoints: [
       {  y:  <?php if($vote[0]==0){echo 0;}else{echo $vote[0];}?>, legendText:"<?php echo $name[0];?> <?php echo $l_name[0];?>",indexLabel: "<?php echo $name[0];?> <?php echo $l_name[0];?> <?php echo number_format((float)$percent[0], 2, '.', '');echo '%';?>" },
       {  y:  <?php if($vote[1]==0){echo 0;}else{echo $vote[1];}?>, legendText:"<?php echo $name[1];?> <?php echo $l_name[1];?>",indexLabel: "<?php echo $name[1];?> <?php echo $l_name[1];?> <?php echo number_format((float)$percent[1], 2, '.', '');echo '%';?>" },
       {  y: <?php if($vote[2]==0){echo 0;}else{echo $vote[2];}?>, legendText:"<?php echo $name[2];?> <?php echo $l_name[2];?>",indexLabel: "<?php echo $name[2];?> <?php echo $l_name[2];?> <?php echo number_format((float)$percent[2], 2, '.', '');echo '%';?>" },
       {  y: <?php if($vote[3]==0){echo 0;}else{echo $vote[3];}?>, legendText:"<?php echo $name[3];?> <?php echo $l_name[3];?>",indexLabel: "<?php echo $name[3];?> <?php echo $l_name[3];?> <?php echo number_format((float)$percent[3], 2, '.', '');echo '%';?>"},
       {  y: <?php if($vote[4]==0){echo 0;}else{echo $vote[4];}?>, legendText:"<?php echo $name[4];?> <?php echo $l_name[4];?>",indexLabel: "<?php echo $name[4];?> <?php echo $l_name[4];?> <?php echo number_format((float)$percent[4], 2, '.', '');echo '%';?>" },
       {  y: <?php if($vote[5]==0){echo 0;}else{echo $vote[5];}?>, legendText:"<?php echo $name[5];?> <?php echo $l_name[5];?>",indexLabel: "<?php echo $name[5];?> <?php echo $l_name[5];?> <?php echo number_format((float)$percent[5], 2, '.', '');echo '%';?>"},
       {  y: <?php if($vote[6]==0){echo 0;}else{echo $vote[6];}?>, legendText:"<?php echo $name[6];?> <?php echo $l_name[6];?>",indexLabel: "<?php echo $name[6];?> <?php echo $l_name[6];?> <?php echo number_format((float)$percent[6], 2, '.', '');echo '%';?>"}
	  
	
       ]
     }
     ]
   });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="js/canvasjs.min.js"></script>
</head>
<body>
<a href="/automatedvote/home.php"><img src="/automatedvote/img/arrow_left.png" width="50px"></a>
<form action="chart.php" class="sky-form" method="POST">
		<div class="row">
				<section class="col col-2">
						<label class="select">
						<b>Display by:</b>
							<select name="position">
								<option value="">--Select Position--</option>
								<option value="President">President</option>
								<option value="Vice-President">Vice-President</option>
								<option value="Secretary">Secretary</option>
								<option value="Treasurer">Treasurer</option>
								<option value="Auditor">Auditor</option>
								<option value="PRO">P.R.O</option>
								<option value="BOD">Board of Directors</option>
								
							</select>
							
							<i></i>
						</label>	
				</section>
				<button onclick="chromeTimeDelay();" type="submit" style="padding:10px;" >Show</button>
		</div>
</form>
			
<div id="chartContainer" style="height: 60%; width: 100%;">
   </div>

   
   
   
</body>


