<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
	echo "<script>alert('Please fill all fields');history.back();</script>"; 
}
else
{


$account =$_POST['account'];
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$date = ($_POST['date']);
$action='login';

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("votedatabase", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from voteusers where password='$password' AND username='$username' AND account = '$account'"  , $connection);
$rows = mysql_num_rows($query);

if ($rows == 1) {
	


mysql_query("insert logdata set 
		
				username='".$username."',
				action='".$action."',
				timedate='".$date."',
				account='".$account."'"
					
				);
				
				
				
				
if($account == 'Admin'){
$_SESSION['login_user']=$username; // Initializing Session
header("location:home.php"); // Redirecting To Other Page
}
else
{	
$_SESSION['login_user']=$username; // Initializing Session
header("location:user/home.php"); // Redirecting To Other Page
}




}



else 
{
	echo "<script>alert('Invalid account, try again!');history.back();</script>"; 

}



mysql_close($connection); // Closing Connection
}
}
?>



  