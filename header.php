<?php
$id =$row['emp_id'];
$user_check=$_SESSION['login_user'];
?>
<div class="wrapper row1">
<header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="home.php">MCWDEAP</a></h1>
      <h2>Lan-Based Computerize Voting System</h2>
    </div>
    <nav>
      <ul>

<li><a href="masterlist.php">Masterlist</a></li>
<li><a href="chart.php">Chart</a></li>
<li><a href="candidate.php">Candidates</a></li>
<li><a href="generateqr.php">Generate QR</a></li>
<li><a href="qrcode.php">Print QR</a></li>
<li><a href="ranking/">Ranks</a></li>
<li><a href="report.php">Reports</a></li>
<li><a href="setting.php">Setting</a></li>
        <li class="last"><a href="logout.php">Sign Out</a></li>
		
 </ul>
    </nav>
	
    <div class="clear"></div>
  </header>
  <div id="hgroup" style="float:right;margin-right:16%;padding:10px;">
	<a href="edituser.php?Id=<?php echo $id;?>">Welcome, <?php echo $user_check;?> <img src="img/orange_file.gif" width="7px"></a>
</div>

</div>






