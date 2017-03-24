<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");


?>


	



	<body>
	<head>
	
	<style>
.clear{display:block; width:100%; clear:both;margin-bottom:115px;}
.printButtonClass{ display : none }


 @media print {
   .noprint{
      display: none !important;
   }
}
</style>

	</head>

	
	<Center>
	
	<fieldset>
	<div  style="width:100%;height:70px;background:#E3E3E3; ">
	<img src="img/company.png" height="70px">
	</div>
	Mabalacat City Water District Employees Association for Progress ( MCWDEAP ) | Mabalacat City Water District Mabiga, Mabalacat City Pampanga

	<h2>Election Results</h2>
	
	
	<span style="float:right; color:black;"><?php echo "Date: " . date("m/d/Y") . "<br>"; ?></span><br>
	
	<table border="1" width="80%">
	<tr>President Position</tr>
	<tr style="background:#E3E3E3;">
	<td>#</td>
	<td>Candidate Name</td>
	<td>Department</td>
	<td>Employee ID</td>
   <td>Total Vote</td>
   <td>Total Percentage</td>
	
	</tr>	
	<?php

$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM candidate where can_position like 'President' order by votecount desc ");
$mime = null;

$totalvoter = mysql_query("SELECT SUM(votecount) FROM candidate");
$row = mysql_fetch_array($totalvoter);
$sum = $row['SUM(votecount)'];

    while($row = mysql_fetch_assoc($sql)) 
	{
	
	$votes =$row['votecount'];
	$perc = $votes/$sum;
	
	?>
	

    <tr>
		<td><?=$row['can_id'] ?></td>
		<td><?=$row['can_fname'] ?> <?=$row['can_lname'] ?></td>
		<td><?=$row['department']?></td>
        <td><?=$row['emp_id']?></td>
        <td><center><?php echo $votes ;?></center></td>
        <td><center>% <?php echo number_format((float)$perc, 2, '.', ''); ?></center></td>
		
    </tr>	
	
	
	
	<?php        
	}     
?>

</table>



	<table border="1" width="80%">
	<tr>Vice-President Position</tr>
	<tr style="background:#E3E3E3;">
	<td>#</td>
<td>Candidate Name</td>
	<td>Department</td>
	<td>Employee ID</td>
   <td>Total Vote</td>
   <td>Total Percentage</td>
	
	</tr>	
	<?php

$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM candidate where can_position like 'Vice-President' order by votecount desc ");
$mime = null;

$totalvoter = mysql_query("SELECT SUM(votecount) FROM candidate");
$row = mysql_fetch_array($totalvoter);
$sum = $row['SUM(votecount)'];

    while($row = mysql_fetch_assoc($sql)) 
	{
	
	$votes =$row['votecount'];
	$perc = $votes/$sum;
	
	?>
	

    <tr>
	<td><?=$row['can_id'] ?></td>
		<td><?=$row['can_fname'] ?> <?=$row['can_lname'] ?></td>
		<td><?=$row['department']?></td>
        <td><?=$row['emp_id']?></td>
        <td><center><?php echo $votes ;?></center></td>
        <td><center>% <?php echo number_format((float)$perc, 2, '.', ''); ?></center></td>
		
    </tr>	
	
	
	
	<?php        
	}     
?>

</table>


<table border="1" width="80%">
	<tr>Secretary</tr>
	<tr style="background:#E3E3E3;">
	<td>#</td>
<td>Candidate Name</td>
	<td>Department</td>
	<td>Employee ID</td>
   <td>Total Vote</td>
   <td>Total Percentage</td>
	
	</tr>	
	<?php

$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM candidate where can_position like 'Secretary' order by votecount desc ");
$mime = null;

$totalvoter = mysql_query("SELECT SUM(votecount) FROM candidate");
$row = mysql_fetch_array($totalvoter);
$sum = $row['SUM(votecount)'];

    while($row = mysql_fetch_assoc($sql)) 
	{
	
	$votes =$row['votecount'];
	$perc = $votes/$sum;
	
	?>
	

    <tr>
	<td><?=$row['can_id'] ?></td>
		<td><?=$row['can_fname'] ?> <?=$row['can_lname'] ?></td>
		<td><?=$row['department']?></td>
        <td><?=$row['emp_id']?></td>
        <td><center><?php echo $votes ;?></center></td>
        <td><center>% <?php echo number_format((float)$perc, 2, '.', ''); ?></center></td>
		
    </tr>	
	
	
	
	<?php        
	}     
?>

</table>

<table border="1" width="80%">
	<tr>Treasurer</tr>
	<tr style="background:#E3E3E3;">
	<td>#</td>
<td>Candidate Name</td>
	<td>Department</td>
	<td>Employee ID</td>
   <td>Total Vote</td>
   <td>Total Percentage</td>
	
	</tr>	
	<?php

$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM candidate where can_position like 'Treasurer' order by votecount desc ");
$mime = null;

$totalvoter = mysql_query("SELECT SUM(votecount) FROM candidate");
$row = mysql_fetch_array($totalvoter);
$sum = $row['SUM(votecount)'];

    while($row = mysql_fetch_assoc($sql)) 
	{
	
	$votes =$row['votecount'];
	$perc = $votes/$sum;
	
	?>
	

    <tr>
	<td><?=$row['can_id'] ?></td>
		<td><?=$row['can_fname'] ?> <?=$row['can_lname'] ?></td>
		<td><?=$row['department']?></td>
        <td><?=$row['emp_id']?></td>
        <td><center><?php echo $votes ;?></center></td>
        <td><center>% <?php echo number_format((float)$perc, 2, '.', ''); ?></center></td>
		
    </tr>	
	
	
	
	<?php        
	}     
?>

</table>

<table border="1" width="80%">
	<tr>Auditor</tr>
	<tr style="background:#E3E3E3;">
	<td>#</td>
<td>Candidate Name</td>
	<td>Department</td>
	<td>Employee ID</td>
   <td>Total Vote</td>
   <td>Total Percentage</td>
	
	</tr>	
	<?php

$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM candidate where can_position like 'Auditor' order by votecount desc ");
$mime = null;

$totalvoter = mysql_query("SELECT SUM(votecount) FROM candidate");
$row = mysql_fetch_array($totalvoter);
$sum = $row['SUM(votecount)'];

    while($row = mysql_fetch_assoc($sql)) 
	{
	
	$votes =$row['votecount'];
	$perc = $votes/$sum;
	
	?>
	

    <tr>
		<td><?=$row['can_id'] ?></td>
		<td><?=$row['can_fname'] ?> <?=$row['can_lname'] ?></td>
		<td><?=$row['department']?></td>
        <td><?=$row['emp_id']?></td>
        <td><center><?php echo $votes ;?></center></td>
        <td><center>% <?php echo number_format((float)$perc, 2, '.', ''); ?></center></td>
		
    </tr>	
	
	
	
	<?php        
	}     
?>

</table>


<table border="1" width="80%">
	<tr>P.R.O</tr>
	<tr style="background:#E3E3E3;">
	<td>#</td>
<td>Candidate Name</td>
	<td>Department</td>
	<td>Employee ID</td>
   <td>Total Vote</td>
   <td>Total Percentage</td>
	
	</tr>	
	<?php

$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM candidate where can_position like 'PRO' order by votecount desc ");
$mime = null;

$totalvoter = mysql_query("SELECT SUM(votecount) FROM candidate");
$row = mysql_fetch_array($totalvoter);
$sum = $row['SUM(votecount)'];

    while($row = mysql_fetch_assoc($sql)) 
	{
	
	$votes =$row['votecount'];
	$perc = $votes/$sum;
	
	?>
	

    <tr><td><?=$row['can_id'] ?></td>
		<td><?=$row['can_fname'] ?> <?=$row['can_lname'] ?></td>
		<td><?=$row['department']?></td>
        <td><?=$row['emp_id']?></td>
        <td><center><?php echo $votes ;?></center></td>
        <td><center>% <?php echo number_format((float)$perc, 2, '.', ''); ?></center></td>
		
    </tr>	
	
	
	
	<?php        
	}     
?>

</table>



<table border="1" width="80%">
	<tr>Board of Directors</tr>
	<tr style="background:#E3E3E3;">
	<td>#</td>
<td>Candidate Name</td>
	<td>Department</td>
	<td>Employee ID</td>
   <td>Total Vote</td>
   <td>Total Percentage</td>
	
	</tr>	
	<?php

$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT * FROM candidate where can_position like 'BOD' order by votecount desc ");
$mime = null;

$totalvoter = mysql_query("SELECT SUM(votecount) FROM candidate");
$row = mysql_fetch_array($totalvoter);
$sum = $row['SUM(votecount)'];

    while($row = mysql_fetch_assoc($sql)) 
	{
	
	$votes =$row['votecount'];
	$perc = $votes/$sum;
	
	?>
	

    <tr><td><?=$row['can_id'] ?></td>
	<td><?=$row['can_fname'] ?> <?=$row['can_lname'] ?></td>
		<td><?=$row['department']?></td>
        <td><?=$row['emp_id']?></td>
        <td><center><?php echo $votes ;?></center></td>
        <td><center>% <?php echo number_format((float)$perc, 2, '.', ''); ?></center></td>
		
    </tr>	
	
	
	
	<?php        
	}     
?>

</table>

</fieldset>
<center><a href="#" class="noprint" onclick="window.print(); return false;">Print</a> <br>
<a href="home.php" class="noprint" >Back</a></center>

</body>
</html>




















