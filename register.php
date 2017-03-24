<?php

    mysql_connect("localhost","root","") or die (mysql_error());
    mysql_select_db("votedatabase") or die (mysql_error());
	
	
$username = ($_POST['username']);
$email= ($_POST['email']);
$answer = ($_POST['answer']);
$question= ($_POST['question']);
$password= ($_POST['password']);
$fname= ($_POST['fname']);
$lname= ($_POST['lname']);
$gender= ($_POST['gender']);
$repassword= ($_POST['repassword']);
$empno = ($_POST['empno']);
$department = ($_POST['department']);
$position = ($_POST['position']);
$imgType = mysql_escape_string($_FILES['image']['type']);

if(empty($_POST['username']))
        { 				
	echo "<script>alert('Please complete all fields!');history.back();</script>";
		}
		
		elseif(empty($_POST['email']))
        { 	
		echo "<script>alert('Please insert valid E-mail');history.back();</script>";
		}
		elseif(empty($_POST['password']))
		{ 	
		echo "<script>alert('Please insert password');history.back();</script>";
		}
		elseif(strlen($_POST['username']) < 3)
		{
		echo "<script>alert('Your Username is too short');history.back();</script>";
		}
		elseif(strlen($_POST['password']) < 3)
		{
		echo "<script>alert('Your Password is weak');history.back();</script>";
		}
		elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
	    echo "<script>alert('Please enter a valid email address');history.back();</script>";
		}
		elseif($password !=$repassword)
		{
	    echo "<script>alert('The password does not match');history.back();</script>";
		}
		elseif(empty($_POST['empno']))
        { 	
		echo "<script>alert('Please insert your employee number');history.back();</script>";
		}
		elseif(empty($_POST['department']))
        { 	
		echo "<script>alert('Please insert your department');history.back();</script>";
		}
		elseif(empty($_POST['position']))
        { 	
		echo "<script>alert('Please insert your job position');history.back();</script>";
		}
elseif(empty($_POST['question']))
        { 	
		echo "<script>alert('Please select secret question');history.back();</script>";
		}
		elseif(empty($_POST['answer']))
        { 	
		echo "<script>alert('Please select secret answer');history.back();</script>";
		}
		
elseif($_FILES['image']['error'] > 0){
echo "<script>alert('An error ocurred, Please insert Candidate Picture');history.back();</script>";
}
elseif(!getimagesize($_FILES['image']['tmp_name'])){
  
	echo "<script>alert('Please ensure you are uploading an image.');history.back();</script>";
}
// Check filetype
elseif(($imgType != "image/jpeg")&&($imgType != "image/jpg")&&($imgType != "image/gif")&&($imgType != "image/png"))  
{		
 echo "<script>alert('Unsupported filetype.');history.back();</script>";
}	
	
else
	{

$connection = mysql_connect("localhost", "root", "");	
$query = mysql_query("select * from voteusers where  username = '$username'", $connection);
$rows = mysql_num_rows($query);

$query1 = mysql_query("select * from voteusers where  email = '$email'", $connection);	
$rows1 = mysql_num_rows($query1);

$query2 = mysql_query("select * from voteusers where  emp_id = '$empno'", $connection);	
$rows2 = mysql_num_rows($query2);
if ($rows == 1) 

		{ 
		echo "<script>alert('The username is already used!');history.back();</script>"; 
        }
		elseif($rows1 == 1) 
		{
		echo "<script>alert('Your email is already exist!');history.back();</script>";
			
		}
		elseif($rows2 == 1) 
		{
		echo "<script>alert('Employee number already exist!');history.back();</script>";
			
		}
		
		
		else{	
$imgName = mysql_escape_string($_FILES['image']['name']);
$imgData = mysql_escape_string(file_get_contents($_FILES['image']['tmp_name']));			
			$activation = md5(uniqid(rand(),true));
		
				$to = "jeronealimpia@gmail.com";
				$subject = "Registration Confirmation";
				$message = "Thank you for registering.\n\n To activate your account, please click on this link:";
				$header = "From:jeronebaman@gmail.com \r\n";
				$retval = mail ($to,$subject,$message,$header);
				if( $retval == true )  
				{
					
				mysql_query("insert voteusers set 
				username='".$username."',
				activation='".$activation."',
				password='".$password."',
				fname='".$fname."',
				lname='".$lname."',
				gender='".$gender."',
				emp_id='".$empno."',
				jobposition='".$position."',
				department='".$department."',
				
				answer='".$answer."',
				question='".$question."',
				
				email='".$email."',
				image='".$imgData."',
				
				
				
				account='User',
				status='Pending',
				imagename='".$imgName."'"			
				);
					
				echo "<script>alert('Registration successful, please wait until your account approve by the Election Committee!');window.location.href = 'index.php';</script>"; 
				}
				
				else
				{
				  echo "Message could not be sent...";
				}		
			}			
		
	}
?>