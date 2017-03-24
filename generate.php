<?php

include('session.php');
 mysql_connect("localhost","root","") or die (mysql_error());
 mysql_select_db("votedatabase") or die (mysql_error());
 
$qrcode= ($_POST['qrcode']);
$department= ($_POST['department']);
$date=($_POST['date']);


$votercount = mysql_query("SELECT * from emp where department = '$department' ");
$total = mysql_num_rows($votercount);				
$code = $qrcode + $total;

if(empty($_POST['department']))
        { 				
	echo "<script>alert('Please Select Department');history.back();</script>";
		}
elseif($total == 0)
		{ 				
	echo "<script>alert('No voter for $department Department');history.back();</script>";
		}
else{
		
	
$connection = mysql_connect("localhost", "root", "");	
$query = mysql_query("select * from votercode where department like '$department'", $connection);
$rows = mysql_num_rows($query);

if ($rows >= 1) 

		{ 
		
		echo "<script>alert('A QrCode for $department department is already generated!');history.back();</script>";
		
        }
		
		else{			
				
$votercount = mysql_query("SELECT * from emp where department = '$department' ");
$total = mysql_num_rows($votercount);				
$code = $qrcode + $total;						
		
		mysql_query("insert qrcodenum set 
			
				qrcode='".$qrcode."',
				department='".$department."',
				date='".$date."',
				totalvoter='".$total."'
				"
					
				);	
	
		echo "<script>alert('A QrCode for $department department is  generated Successfully!');window.location.href = 'qrcode.php';</script>"; 

		
		}
		
}
?>