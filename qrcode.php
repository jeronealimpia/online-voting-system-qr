<head>
<title>Print QR</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />            
<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/sky-forms.css">
<link rel="stylesheet" href="css/layout.css" type="text/css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>  
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
</head>


<body>

<form  class="sky-form" enctype="multipart/form-data">
	
				
				
				<header>
				<a href="home.php"><img src="/automatedvote/img/arrow_left.png" width="50px"></a>			
				Print Qrcode
				
				</header>	
					

<div id="all" class="tab-content" style="margin-left:10%;margin-right:10%;">
<div class="CSSTableGenerator" >			
<table >
<tr>
	<td>iD</td>
   <td>Code</td>
   <td>Department</td>
   <td>Date</td>
	<td>Total Voter</td>
	<td>
	
	
<form action="qrcode.php" method="GET">
		
		<input name="search" placeholder="Search" type="text" maxlength="20" style="padding:5px;">
		<img src="img/search_box_icon.png">
		<input type="submit" style = "padding:10px;" value="Search">
	</form>				
	
	</td>
</tr>

		
<?php

if(empty($_GET['search'])){

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");	
	
			
$query = mysql_query("select * from qrcodenum order by idnum asc");	
if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ 
	?>			

	  <tr>
		<td><?=$row['idnum']?></td>
        <td><?=$row['qrcode'] ?></td>
        <td><?=$row['department']?></td>
		<td><?=$row['date']?></td>
        <td><?=$row['totalvoter']?></td>
		<td><center><button><a href="printqr.php?idnum=<?=$row['idnum']?>" >[Print This]</a></button></center></td>
		
					
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
	
			
$query = mysql_query("select * from qrcodenum WHERE department like '%$_GET[search]%' ");	
if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ 	
		
?>	
	<tr>
		<td><?=$row['idnum']?></td>
        <td><?=$row['qrcode'] ?></td>
        <td><?=$row['department']?></td>
		<td><?=$row['date']?></td>
        <td><?=$row['totalvoter']?></td>	
		<td><center><button><a href="printqr.php?idnum=<?=$row['idnum']?>" >[Print This]</a></button></center></td>
	
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
		





		
</body>
