<?php

$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");

$approve="Approve";	
mysql_query("update voteusers set status='$approve' where status = 'Pending' ");
echo "<script>alert('All pending accounts approved successfully');window.location.href = 'setting.php#account';</script>"; 	
		
?>