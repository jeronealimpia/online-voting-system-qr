<?php
include('session.php');
    mysql_connect("localhost","root","") or die (mysql_error());
    mysql_select_db("votedatabase") or die (mysql_error());

	
$id = ($_POST['id'])?$_POST['id']:'';
$username= ($_POST['username']);
$oldpass= ($_POST['oldpassword']);
$newpass= ($_POST['newpassword']);
$email= ($_POST['email']);


if(empty($_POST['username']))
        { 	
		echo "<script>alert('Please enter Username');history.back();</script>";
		}
elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
	    echo "<script>alert('Please enter a valid email address');history.back();</script>";
		}		

elseif(empty($_POST['oldpassword']))
		{ 	
		echo "<script>alert('Please type your old password');history.back();</script>";
		}
elseif(empty($_POST['newpassword']))
		{ 	
		echo "<script>alert('Please type for new password');history.back();</script>";
		}
		
else
{

	



$query = mysql_query("select password from voteusers where emp_id='".$id."'");
$row = mysql_fetch_array($query);

$pass= $row['password'];

if($pass == $oldpass)	

{	
mysql_query("update voteusers set
				username='".$username."',
				email='".$email."',
				password='".$newpass."'
				
				where emp_id='".$id."'");
echo "<script>alert('Account was updated successfully.');window.location.href = 'home.php';</script>";				


}		
else
{
	
	echo "<script>alert('Password not exist!');history.back();</script>";
}
	
	
}
?>