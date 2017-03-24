
<aside id="left_column">
<img src="img/Ranking.jpg" style ="height: 150px;margin-right:15%;">










<center><h3 class="title">President</h3></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'President' order by votecount desc ");
$mime = null;
$count = 0;
		while($row = mysql_fetch_assoc($sql))
			{ 
				$count = $count + 1;
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>		
		<tr>
        <td><span style="color:red;"><img src="img/star.png" style ="height: 30px; width: 30px;"><?php echo $count;?></span> <?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 50px; width: 50px;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?>  </td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>
     

	 
<center><h3 class="title">Vice President</h3></center>
      <nav>
        <ul>
          <?php




$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image,can_id, can_fname,can_lname FROM candidate where can_position = 'Vice-President' order by votecount desc ");
$mime = null;
$count = 0;
		while($row = mysql_fetch_array($sql))
			{ 
				$count = $count + 1;
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
		?>	
<li>		
		<tr>
        <td><span style="color:red;"><img src="img/star.png" style ="height: 30px; width: 30px;"><?php echo $count;?></span> <?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 50px; width: 50px;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?> </td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>
	  
	  
	  
<center><h3 class="title">Secretary</h3></center>
      <nav>
        <ul>
          <?php




$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'Secretary' ");
$mime = null;
$count = 0;

		while($row = mysql_fetch_array($sql))
			{ 
				$count = $count + 1;
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
		?>	
<li>		
		<tr>
        <td><span style="color:red;"><img src="img/star.png" style ="height: 30px; width: 30px;"><?php echo $count;?></span> <?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 50px; width: 50px;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?> </td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
      </nav>
	  
	 
<center><h3 class="title">Treasurer</h3></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'Treasurer' order by votecount desc ");
$mime = null;
$count = 0;
		while($row = mysql_fetch_assoc($sql))
			{ 
				$count = $count + 1;
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>		
		<tr>
        <td><span style="color:red;"><img src="img/star.png" style ="height: 30px; width: 30px;"><?php echo $count;?></span> <?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 50px; width: 50px;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?> </td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>	


<center><h3 class="title">Auditor</h3></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'Auditor' order by votecount desc ");
$mime = null;
$count = 0;
		while($row = mysql_fetch_assoc($sql))
			{ 
				$count = $count + 1;
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>		
		<tr>
        <td><span style="color:red;"><img src="img/star.png" style ="height: 30px; width: 30px;"><?php echo $count;?></span> <?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 50px; width: 50px;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?>  </td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>	


<center><h3 class="title">P.R.O</h3></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'PRO' order by votecount desc ");
$mime = null;
$count = 0;
		while($row = mysql_fetch_assoc($sql))
			{ 
				$count = $count + 1;
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>		
		<tr>
        <td><span style="color:red;"><img src="img/star.png" style ="height: 30px; width: 30px;"><?php echo $count;?></span> <?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 50px; width: 50px;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?></td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>	


<center><h3 class="title">Board of Directors</h3></center>
    <nav>
        <ul>
		
<?php
$connection = mysql_connect("localhost", "root", "");
$sql = mysql_query("SELECT can_image, can_id, can_fname,can_lname FROM candidate where can_position = 'BOD' order by votecount desc ");
$mime = null;
$count = 0;
		while($row = mysql_fetch_assoc($sql))
			{ 
				$count = $count + 1;
				$fname =$row['can_fname'];
				$lname =$row['can_lname'];
				$can_id =$row['can_id'];
				$imgsrc = "data:".$mime.";base64," . base64_encode($row['can_image']);
?>	
<li>		
		<tr>
        <td><span style="color:red;"><img src="img/star.png" style ="height: 30px; width: 30px;"><?php echo $count;?></span> <?php echo '<img src="'.$imgsrc.'" alt="" style ="height: 50px; width: 50px;">';?> <?=$row['can_fname']?> <?=$row['can_lname']?>  </td>
		</tr>
</li>
		<?php
			}
		?>
        </ul>
</nav>	









	
</aside>

	



