 
 <?php
 mysql_connect("localhost","root","") or die (mysql_error());
 mysql_select_db("votedatabase") or die (mysql_error());
	
	
$fname = ($_POST['fname']);
$lname= ($_POST['lname']);
$empno= ($_POST['empno']);
$department= ($_POST['department']);


if(empty($_POST['fname']))
        { 				
	echo "<script>alert('Please complete all fields!');history.back();</script>";
		}
			elseif(empty($_POST['department']))
        { 	
		echo "<script>alert('Please select Department');history.back();</script>";
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
$query = mysql_query("select * from emp where  f_name = '$fname'  AND l_name = '$lname' OR emp_id = '$empno' ", $connection);
$rows = mysql_num_rows($query);
if($rows == 1)
{
echo "<script>alert('Employee information is already on the marterlist');history.back();</script>";
	
}	
else
{
	
	mysql_query("insert emp set 
				emp_id='".$empno."',
				f_name='".$fname."',
				l_name='".$lname."',
				department='".$department."'
				");
	
	
echo "<script>alert('Employee added Successfully');window.location.href = 'masterlist.php';</script>";
}

}
?>