<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");

$idnum=($_GET['idnum'])?$_GET['idnum']:'';
	
$query = mysql_query("select * from qrcodenum where idnum = '$idnum' ");
$rows = mysql_fetch_array($query);
$qrcode = $rows['qrcode'] ;
$voter = $rows['totalvoter'];
$department = $rows['department'];








for($x=0;$x<$voter;$x++)
{


mysql_query("insert votercode set 		
				
				qr_id='".$qrcode."',
				department='".$department."'
				"
			);


$qrcode = $qrcode+1;










mysql_query("DELETE FROM `qrcodenum` WHERE `qrcodenum`.`idnum`='".$idnum."'");



	
	
	
	
}






?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1, maximum-scale=1, width=device-width" name="viewport">
    <title>Loading</title>
    <link href="build/stylesheets/application.css?1325743336" media="screen" rel="stylesheet" type="text/css" />
    <link href="build/stylesheets/ui-progress-bar.css?1325742643" media="screen" rel="stylesheet" type="text/css" />
    <script src="build/javascripts/application.js?1325742642" type="text/javascript"></script>
    
  </head>
  
  <body class="index" style="margin-top:22%;">
    <div id="container">
    
     
        <section class="work">
          <div class="ui-progress-bar ui-container" id="progress_bar">
            <div class="ui-progress" style="width: 7%;">
              <span class="ui-label" style="display:none;">
                Loading Database please wait!
                <b class="value">3%</b>
              </span>
            </div>
          </div>
        </section>
		
		
		
		
		
		
		
        <section class="wild" style="display: none;">
          
          <ol class="links">
		  	
              <li class="link"><a class="btn download" href="home.php"><span>Complete</span></a></li>
          </ol>
			
        </section>
		
		
		
		
		
		
      <script>
        //<![CDATA[
          $(function() {
            App.init();  
          });
        //]]>
      </script>
      <footer style="display: none;">
        <p class="copy">
          A <a rel="twipsy" title="Follow me on Twitter" href="">BE4MA</a>Thesis project. Copyright &copy; 2015.
        
		
		
		
		</p>
      </footer>
			
    </div>

  </body>
</html>





