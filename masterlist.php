<?php
include('session.php');
?>
<html lang="en" dir="ltr">
<head>
<title>Candidates</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
<link rel="stylesheet" href="css/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<!-- Add jQuery library -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fbox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="fbox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fbox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fbox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fbox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fbox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" href="fbox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fbox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="fbox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fbox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- fancy box js -->

<script type="text/javascript">
$("document").ready(function(){
	$(".add").fancybox();
	});
</script>

<script type="text/javascript">
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
</script>


</head>

<body>


<?php

include('header.php');
?>

<div class="wrapper row2">
	<div id="container">
		<?php
		
		
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("votedatabase", $connection);
		
		
		
		include('body.php');
		include('employee.php');
		?>	
	</div>
</div>

<?php
include('footer.php');
?>





</body>
</html>
