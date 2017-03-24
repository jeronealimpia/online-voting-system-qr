<?PHP
   mysql_connect("localhost","root","") or die (mysql_error());
   mysql_select_db("votedatabase") or die (mysql_error());
	

$answer = ($_POST['answer']);
$question= ($_POST['question']);
	
	
$query = mysql_query("select * from voteusers where  question like '$question' AND answer like '$answer'  ");
$rows = mysql_num_rows($query);


if($rows == 1)
{
$query1 = mysql_query("select * from voteusers where  question like '$question' AND answer like '$answer'  ");
$row = mysql_fetch_array($query1);
$pass= $row['password'];
echo "<script>alert('Your password is $pass');window.location.href = 'index.php';</script>";	
}	
else
{
echo "<script>alert('Security question and answer not existed');history.back();</script>";	
}
?>


