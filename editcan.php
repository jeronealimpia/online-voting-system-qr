<?php

    mysql_connect("localhost","root","") or die (mysql_error());
    mysql_select_db("votedatabase") or die (mysql_error());

	
$canid = ($_POST['can_id'])?$_POST['can_id']:'';




$sql = mysql_query("SELECT emp_id FROM candidate where can_id = $canid ");
$row = mysql_fetch_assoc($sql);
$emp =$row['emp_id'];	



$position = ($_POST['canposition']);	
$fname = ($_POST['fname']);
$lname = ($_POST['lname']);
$department = ($_POST['department']);

$imgType = mysql_escape_string($_FILES['image']['type']);	


if(empty($_POST['fname']))
        { 				
	echo "<script>alert('Please Complete all fields!');history.back();</script>";
		}
elseif(empty($_POST['lname']))
        { 	
	echo "<script>alert('Please enter Last Name');history.back();</script>";
		}
elseif(empty($_POST['canposition']))
        { 	
echo "<script>alert('Please select Position');history.back();</script>";
		}
elseif(empty($_POST['department']))
        { 	
	echo "<script>alert('Please select department');history.back();</script>";
		}		
elseif($_FILES['image']['error'] > 0)
{

$connection = mysql_connect("localhost", "root", "");	
$query = mysql_query("select * from emp where  f_name = '$fname'  AND l_name = '$lname' ", $connection);
$rows = mysql_num_rows($query);
if($rows == 1)
{
echo "<script>alert('Employee information is already on the marterlist');history.back();</script>";
	
}	
else	
{

	
mysql_query("update candidate set
			can_position='".$position."',
				can_fname='".$fname."',
				can_lname='".$lname."',
				department='".$department."'
				
				where can_id='".$canid."'");
				
	mysql_query("update emp set
			
				f_name='".$fname."',
				l_name='".$lname."',
				department='".$department."'
				
				where emp_id = '$emp'   ");			
				
				
		echo "<script>alert('Candidate was updated.');window.location.href = 'setting.php';</script>";
	
}	
}
elseif(!getimagesize($_FILES['image']['tmp_name']))
{
  
	echo "<script>alert('Please ensure you are uploading an image.');history.back();</script>";
}
// Check filetype
elseif(($imgType != "image/jpeg")&&($imgType != "image/jpg")&&($imgType != "image/gif")&&($imgType != "image/png"))  
{		
 echo "<script>alert('Unsupported filetype.');history.back();</script>";
}	











else{
	
$connection = mysql_connect("localhost", "root", "");	
$query = mysql_query("select * from emp where  f_name = '$fname'  AND l_name = '$lname' ", $connection);
$rows = mysql_num_rows($query);
if($rows == 1)
{
echo "<script>alert('Employee information is already on the marterlist');history.back();</script>";
	
}	
else	
{	
	
	
	
	
	
	
	
$imgName = mysql_escape_string($_FILES['image']['name']);
$imgData = mysql_escape_string(file_get_contents($_FILES['image']['tmp_name']));		
mysql_query("update candidate set
				can_position='".$position."',
				can_fname='".$fname."',
				can_lname='".$lname."',
				department='".$department."',
				can_image='".$imgData."',
				can_imagename='".$imgName."'
				
				where can_id='".$canid."'");
				
		mysql_query("update emp set
			
				f_name='".$fname."',
				l_name='".$lname."',
				department='".$department."'
				
				where emp_id = '$emp'  ");			
			
				
		echo "<script>alert('Candidate was updated.');window.location.href = 'setting.php';</script>";
		
		
	
}

}
?>