<?php
include('session.php');
    mysql_connect("localhost","root","") or die (mysql_error());
    mysql_select_db("votedatabase") or die (mysql_error());
$canposition= ($_POST['canposition']);
$fname= ($_POST['fname']);
$lname= ($_POST['lname']);
$gender= ($_POST['gender']);
$empno = ($_POST['empno']);
$department = ($_POST['department']);
$position = ($_POST['position']);
$age = ($_POST['age']);
$imgType = mysql_escape_string($_FILES['image']['type']);

if(empty($_POST['canposition']))
        { 				
	echo "<script>alert('Please select for the running position');history.back();</script>";
		}

elseif(empty($_POST['fname']))
        { 				
	echo "<script>alert('Please Complete all fields!');history.back();</script>";
		}
elseif(empty($_POST['lname']))
        { 	
	echo "<script>alert('Please enter Last Name');history.back();</script>";
		}
elseif(empty($_POST['empno']))
        { 	
	echo "<script>alert('Please enter Employee Number');history.back();</script>";
		}
elseif(empty($_POST['department']))
        { 	
	echo "<script>alert('Please select Department');history.back();</script>";
		}
elseif(empty($_POST['position']))
		{ 	
		echo "<script>alert('Please insert Position');history.back();</script>";
		}

elseif(empty($_POST['age']))
		{ 	
		echo "<script>alert('Please insert Age');history.back();</script>";
		}
elseif(empty($_POST['gender']))
		{ 	
		echo "<script>alert('Please select Gender');history.back();</script>";
		}

				
				
else{

$connection = mysql_connect("localhost", "root", "");	
$query = mysql_query("select * from emp where  f_name like '$fname' AND l_name like '$lname'  AND emp_id like '$empno' ", $connection);
$rows = mysql_num_rows($query);
if($rows == 1)
{
	
	
if($_FILES['image']['error'] > 0){
echo "<script>alert('An error ocurred, Please insert Candidate Picture');history.back();</script>";
}
elseif(!getimagesize($_FILES['image']['tmp_name'])){
  
	echo "<script>alert('Please ensure you are uploading an image.');history.back();</script>";
}
// Check filetype
elseif(($imgType != "image/jpeg")&&($imgType != "image/jpg")&&($imgType != "image/gif")&&($imgType != "image/png")&&($imgType != "image/bmp"))  
{		
 echo "<script>alert('Unsupported filetype.');history.back();</script>";
}	


else{
	
	$imgName = mysql_escape_string($_FILES['image']['name']);
	$imgData = mysql_escape_string(file_get_contents($_FILES['image']['tmp_name']));	

$connection = mysql_connect("localhost", "root", "");	
$query = mysql_query("select * from candidate where  can_fname like '$fname'", $connection);
$rows = mysql_num_rows($query);

$query1 = mysql_query("select * from candidate where  can_lname like '$lname'", $connection);
$rows1 = mysql_num_rows($query1);
if (($rows >= 1) &&($rows1 >= 1))

		{ 
		echo "<script>alert('The Candidate $fname $lname already running for a postion!');history.back();</script>"; 
        }
		
else{



mysql_query("insert candidate set 
				can_position='".$canposition."',
				can_fname='".$fname."',
				can_lname='".$lname."',
				can_gender='".$gender."',
				can_age='".$age."',
				emp_id='".$empno."',
				jobposition='".$position."',
				department='".$department."',	
				can_image='".$imgData."',
				can_imagename='".$imgName."'
				"
			);
		echo "<script>alert('New candidate for $canposition was added.');window.location.href = 'candidate.php';</script>";
		
		}
	}	

	}	
	else
{
echo "<script>alert('Your information doesnt exist on the employee master list');history.back();</script>";	
}
	
}

?>