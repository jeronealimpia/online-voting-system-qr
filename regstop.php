<?php
include('session.php');
 mysql_connect("localhost","root","") or die (mysql_error());
 mysql_select_db("votedatabase") or die (mysql_error());

 
 $query2 = mysql_query("select * from session where  reg = 'Start'");	
$rows2 = mysql_num_rows($query2);
if ($rows2 == 1) 
{$start = 'Close';}
else
{$start = 'Start';}	
 

mysql_query("update session set reg='$start' ");
echo "<script>alert('The Registration is now officially $start.');window.location.href='setting.php#start'</script>";

?>
