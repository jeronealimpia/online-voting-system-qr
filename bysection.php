<?php

include('session.php');
 mysql_connect("localhost","root","") or die (mysql_error());
 mysql_select_db("votedatabase") or die (mysql_error());
 
$year= ($_POST['year']);
$code= ($_POST['qrcode']);
$classname=($_POST['class']);
$voter_num= ($_POST['voternum']);
$classtype='Section';

$str = strtoupper($classname);

if(empty($_POST['class']))
        { 				
	echo "<script>alert('Please Complete all fields!');history.back();</script>";
		}

elseif(empty($_POST['voternum']))
        { 	
		echo "<script>alert('Please enter the number of Voters');history.back();</script>";
		}		
else{
		
	
$connection = mysql_connect("localhost", "root", "");	
$query = mysql_query("select * from qrcodenum where  year ='$year' AND class_name like '$classname'", $connection);
$rows = mysql_num_rows($query);

if ($rows == 1) 

		{ 
		
		echo "<script>alert('A QrCode for the section $classname is already generated!');history.back();</script>";
		
        }
		
		else{	
		
$action = 'generate qrcode';		
$date = ($_POST['date']);
$account= 'Admin';
$user_check=$_SESSION['login_user'];
mysql_query("insert logdata set 
		
				username='".$user_check."',
				action='".$action."',
				timedate='".$date."',
				account='".$account."'"
					
				);	
		
		mysql_query("insert qrcodenum set 
			
				class_name='".$str."',
				year='".$year."',
				qrcode='".$code."',
				class_type='".$classtype."',
				votercount='".$voter_num."'
				"
					
				);	
	
		echo "<script>alert('QrCode Generated');window.location.href = 'qrcode.php';</script>"; 

		
		}
		
}
?>