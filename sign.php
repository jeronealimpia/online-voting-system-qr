 
 <?php
 mysql_connect("localhost","root","") or die (mysql_error());
 mysql_select_db("votedatabase") or die (mysql_error());
	
	
$fname = ($_POST['fname']);
$lname= ($_POST['lname']);
$empno= ($_POST['empno']);



if(empty($_POST['fname']))
        { 				
	echo "<script>alert('Please complete all fields!');history.back();</script>";
		}
		
		elseif(empty($_POST['lname']))
        { 	
		echo "<script>alert('Please insert valid Last Name');history.back();</script>";
		}
		elseif(empty($_POST['empno']))
		{ 	
		echo "<script>alert('Please insert Employee ID');history.back();</script>";
		}
		

else
{
$connection = mysql_connect("localhost", "root", "");	
$query = mysql_query("select * from emp where  f_name like '$fname' AND l_name like '$lname'  AND emp_id like '$empno' ", $connection);
$rows = mysql_num_rows($query);
if($rows == 1)
{
echo "<script>window.location.href = 'registerform.php?empno=$empno';</script>";	
}	
else
{
echo "<script>alert('Your information doesnt exist on the employee master list');history.back();</script>";	
}

}
?>