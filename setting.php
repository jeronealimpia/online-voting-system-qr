
<?php
include('session.php');
 mysql_connect("localhost","root","") or die (mysql_error());
 mysql_select_db("votedatabase") or die (mysql_error());

$query2 = mysql_query("select * from session where  start = 'Start'");	
$rows2 = mysql_num_rows($query2);
if ($rows2 == 1) 
{$start = 'Close';}
else
{$start = 'Start';}	

$query3 = mysql_query("select * from session where  reg = 'Start'");	
$rows3 = mysql_num_rows($query3);
if ($rows3 == 1) 
{$start1 = 'Close';}
else
{$start1 = 'Start';}	


$date= date('d');
?>


<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Setting</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/layout.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css" media="all" />	
		<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" /> 
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>   



<script src="countdown_v5.0/countdown.js" type="text/javascript"></script>

</head>

<body class="bg-cyan">
	

<ul class="tabs">
<li><a href="#candidate">Candidate Setting</a></li>
<li><a href="#account">Account Setting</a></li>
<li><a href="#start">Start/Close Election</a></li>
</ul>
<a href="home.php"><img src="img/arrow_left.png" width="50px"></a>	
	
	
	
	
	
<div class="body body-s">	



<div id="start" class="sky-form" style="display:none;">	

 <p style="    
		font-family:georgia, serif;
	  color:#381704;
	  font-size:14px;
	  letter-spacing:0.1em;
	  line-height:200%;
	  padding-top:11px;
	  ">Click button "<?php echo $start;?>" to <?php echo $start?> the Election..<a href="start.php"><button style="padding:20px;"><?php echo $start;?></button></a> </p>
	  
	  
	   <p style="    
		font-family:georgia, serif;
	  color:#381704;
	  font-size:14px;
	  letter-spacing:0.1em;
	  line-height:200%;
	  padding-top:11px;
	  ">Click button "<?php echo $start1;?>" to <?php echo $start1?> the Registration..<a href="regstop.php"><button style="padding:20px;"><?php echo $start1;?></button></a> </p>
	  
	

<script type="application/javascript">
var myCountdown1 = new Countdown({
								 	time: 86400 * 5, // 86400 seconds = 1 day
									width:300, 
									height:60,  
									rangeHi:"day",
									style:"flip"	// <- no comma on last item!
									});

</script>


<script type="text/javascript">
function GetClock(){
var d=new Date();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

     if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<div id="clockbox"></div>


	
</div>
















<form id="candidate" class="sky-form">			
<center><header style="background:#404040;color:white;">President</header></center>			
<?php

 mysql_connect("localhost","root","") or die (mysql_error());
    mysql_select_db("votedatabase") or die (mysql_error());
	
 
?>

    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'President' ");
$mime = null;

		while($row = mysql_fetch_assoc($sql))
			{ 
				
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>	<center>	
		<tr>
        <td><div class="box" style =" width: 10%;"><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 100%; width: 100%;float:left;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?><br> <a href="edit.php?can_id=<?=$row['can_id']?>">Edit</a></div> </td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>
     
<div class="clear">
			
		</div>	
	 
<center><header style="background:#404040;color:white;">Vice President</header></center>
      <nav>
        <ul>
          <?php




$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image,can_id, can_fname,can_lname FROM candidate where can_position = 'Vice-President' ");
$mime = null;
		while($row = mysql_fetch_array($sql))
			{ 
				
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
		?>	
<li>		
		<tr>
        <td><div class="box" style =" width: 10%;"><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 100%; width: 100%;float:left;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?><br> <a href="edit.php?can_id=<?=$row['can_id']?>">Edit</a> </div></td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>
	  
<div class="clear">
			
		</div>		  
	  
<center><header style="background:#404040;color:white;">Secretary</header></center>
      <nav>
        <ul>
          <?php




$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'Secretary' ");
$mime = null;
		while($row = mysql_fetch_array($sql))
			{ 
				
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
		?>	
<li>		
		<tr>
        <td><div class="box"style =" width: 10%;" ><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 100%; width: 100%;float:left;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?><br> <a href="edit.php?can_id=<?=$row['can_id']?>">Edit</a></div></td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
      </nav>
	  
<div class="clear">
			
		</div>		  
	

<div class="clear">
			
		</div>		
<center><header style="background:#404040;color:white;">Treasurer</header></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'Treasurer' ");
$mime = null;

		while($row = mysql_fetch_assoc($sql))
			{ 
				
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>		
		<tr>
        <td><div class="box" style =" width: 10%;"><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 100%; width: 100%;float:left;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?><br> <a href="edit.php?can_id=<?=$row['can_id']?>">Edit</a></div> </td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>	




<div class="clear">
			
		</div>	
<center><header style="background:#404040;color:white;">Auditor</header></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'Auditor' ");
$mime = null;

		while($row = mysql_fetch_assoc($sql))
			{ 
				
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>		
		<tr>
        <td><div class="box" style =" width: 10%;"><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 100%; width: 100%;float:left;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?><br> <a href="edit.php?can_id=<?=$row['can_id']?>">Edit</a> </div></td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>	



<div class="clear">
			
		</div>	
<center><header style="background:#404040;color:white;">P.R.O</header></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'PRO' ");
$mime = null;

		while($row = mysql_fetch_assoc($sql))
			{ 
				
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>		
		<tr>
        <td><div class="box" style =" width: 10%;"><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 100%; width: 100%;  float:left;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?><br> <a href="edit.php?can_id=<?=$row['can_id']?>">Edit</a></div></td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>	


<div class="clear">
			
</div>	
<center><header style="background:#404040;color:white;">Board of Directors</header></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'BOD' ");
$mime = null;


		while($row = mysql_fetch_assoc($sql))
			{ 
				
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	





<li>		
		<tr>
		
        <td><div class="box" style =" width: 10%;"><?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 100%; width: 100%; float:left;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?><br> <a href="edit.php?can_id=<?=$row['can_id']?>">Edit</a></div></td>
		</tr>
		
</li>
		<?php
			}
		?>
        </ul>
</nav>
</form>



<form  id="account" class="sky-form" style="display:none;">	



<div id="all" class="tab-content" style="margin-left:10%;margin-right:10%;">
<div class="CSSTableGenerator" >			
<table >
<tr>
	<td>iD</td>
   <td>Username</td>
   <td>Email</td>
   <td>Account Type</td>
	<td>Status</td>
	<td>
	
	
<form action="setting.php" method="GET">
		<img src="img/search_box_icon.png">
		<input name="search" placeholder="Search Username" type="text" maxlength="20" style="padding:5px;">
		
		<input type="submit" style = "padding:10px;" value="Search">
		<button style="padding:10px;"><a href="approveall.php" >Approve All Pending</a></button>
	</form>				
	
	</td>
</tr>

		
<?php

if(empty($_GET['search'])){

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");	
	
			
$query = mysql_query("select * from voteusers order by Id asc");	
if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ 
	
	
	?>			

	  <tr>
		<td><?=$row['Id']?></td>
        <td><?=$row['username'] ?></td>
        <td><?=$row['email']?></td>
		<td><?=$row['account']?></td>
        <td><?=$row['status']?></td>
		<td><center><button style="padding:10px;"><a href="approve.php?id=<?=$row['emp_id']?>" >Approve</a></button></center></td>
					
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
	
			
$query = mysql_query("select * from voteusers WHERE username like '%$_GET[search]%'");	
if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ 	
		
?>	
	<tr>
		<td><?=$row['Id']?></td>
        <td><?=$row['username'] ?></td>
        <td><?=$row['email']?></td>
		<td><?=$row['account']?></td>
        <td><?=$row['status']?></td>
		<td><center><button style="padding:10px;"><a href="approve.php?id=<?=$row['emp_id']?>" >Approve</a></button></a> </center></td>			
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
</div>
</body>
</html>	