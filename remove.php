<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");

$idnum=($_GET['id']);
mysql_query("DELETE FROM `candidate` WHERE `candidate`.`can_id`= '$idnum' ");
echo "<script>window.location.href = 'setting.php';</script>";
?>