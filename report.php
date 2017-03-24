<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Report</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/layout.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css" media="all" />	
		<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" /> 
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>   



<script>
 function reformat(){
          
var x = confirm('This will going to erase the whole database resources, are you sure you want to continue?');
if(x==true){
var y=confirm('Click OK to proceed');
if(y==true){
window.location.href = 'default.php';
			}
			}
			else
			{return;}

	  }
</script>
</head>

<body class="bg-cyan">
	

<ul class="tabs">
<li><a href="#final">Final Result</a></li>
<li><a href="#log">Log Report</a></li>
<li><a href="#vote">Vote Record</a></li>
</ul>
	
<a href="home.php"><img src="img/arrow_left.png" width="50px"></a>	
	
	
	
	
<div class="body body-s">	



<div id="final" class="tab-content">
<form   class="sky-form"  >

<a href="printreport.php">Final result as of <input size="50px"type="text" name="date" id="date" readonly > Click here.. </a>

<script>
			document.getElementById("date").value = Date();
			</script> 
</form>
</div>








<div id="log" class="tab-content"
<form  class="sky-form"   >	

<div  style="margin-left:10%;margin-right:10%;">
<div class="CSSTableGenerator" >			
<table >
<tr>
	<td>Username</td>
   <td>Action</td>
   <td>Time&Date </td>
   <td>Account</td>
	<td>
	
	
<form action="report.php#log" method="GET">
		<img src="img/search_box_icon.png">
		<input name="search" placeholder="Search" type="text" maxlength="20" style="padding:5px;">
		
		<input type="submit" style = "padding:10px;" value="Search">
	</form>				
	
	</td>
</tr>

		
<?php

if(empty($_GET['search'])){

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");	
	
			
$query = mysql_query("select * from logdata order by timedate desc");	
if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ 
	
	
	?>			

	  <tr>
		<td><?=$row['username']?></td>
        <td><?=$row['action'] ?></td>
        <td><?=$row['timedate']?></td>
		<td><?=$row['account']?></td>
		<td><center><button style="padding:10px;"><a href="view.php?id=<?=$row['username']?>">View</a></button></center></td>
					
	</tr>

<?php        
        
    }
        
}
else{
    
    echo "<center><span style='color:red'>[ no record found! ]</span></center>";
}


}
else{
	

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");	
	
			
$query = mysql_query("select * from logdata WHERE username like '%$_GET[search]%'");	
if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ 	
		
?>	
	<tr>
	<td><?=$row['username']?></td>
        <td><?=$row['action'] ?></td>
        <td><?=$row['timedate']?></td>
		<td><?=$row['account']?></td>
		<td><center><button style="padding:10px;"><a href="view.php?id=<?=$row['username']?>">View</a></button></center></td>
					
	</tr>
	
	
<?php	
	
	

	
	}
	}	
	
	
	else{
    echo "<center><span style='color:red'>[ no record found! ]</span></center>";
		}
}




?>	
				
</table >
</div>	
</div>	
</form>
</div>






<div id="vote" class="tab-content">
<form   class="sky-form"  >
<div class="CSSTableGenerator" >			
<table >
<tr>
	<td>ID</td>
   <td>Date</td>
   <td>Voter Name</td>
   <td>Employee Id</td>
   <td>Department</td>
   <td>Job Position</td>
   
	<td>
	
	
<form action="report.php#vote" method="GET" >
		<img src="img/search_box_icon.png">
		<input name="search" placeholder="Search" type="text" maxlength="20" style="padding:5px;">
		
		<input type="submit" style = "padding:10px;" value="Search">
	</form>				
	
	</td>
</tr>

		
<?php

if(empty($_GET['search'])){

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");	
	
			
$query = mysql_query("select * from ballot order by date desc");	
if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ 
	
	
	?>			

	  <tr>
		<td><?=$row['id']?></td>
        <td><?=$row['date'] ?></td>
        <td><?=$row['fname']?> <?=$row['lname']?></td>
		<td><?=$row['emp_id']?></td>
		<td><?=$row['department']?></td>
		<td><?=$row['jobposition']?></td>
		<td><center><button style="padding:10px;"><a href="viewvoter.php?id=<?=$row['emp_id']?>" >View</a></button></center></td>
					
	</tr>

<?php        
        
    }
        
}
else{
    
    echo "<center><span style='color:red'>[ no record found! ]</span></center>";
}


}
else{
	

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");	
	
			
$query = mysql_query("select * from ballot WHERE fname like '%$_GET[search]%'");	
if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ 	
		
?>	
	<tr>
		<td><?=$row['id']?></td>
        <td><?=$row['date'] ?></td>
        <td><?=$row['fname']?> <?=$row['lname']?></td>
		<td><?=$row['emp_id']?></td>
		<td><?=$row['department']?></td>
		<td><?=$row['jobposition']?></td>
		<td><center><button style="padding:10px;"><a href="viewvoter.php?id=<?=$row['emp_id']?>" >View</a></button></center></td>
					
	</tr>
	
	
<?php	
	
	

	
	}
	}	
	
	
	else{
    echo "<center><span style='color:red'>[ no record found! ]</span></center>";
		}
}




?>	
				
</table >
</div>	
</form>
</div>








































</div>
</body>
</html>	