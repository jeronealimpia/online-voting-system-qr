<?php

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");


$idnum=($_GET['id'])?$_GET['id']:'';
$approve="Approve";	
mysql_query("update voteusers set status='$approve' where emp_id = '$idnum' ");
echo "<script>alert('An account approved successful');window.location.href = 'setting.php#account';</script>"; 	
		
?>