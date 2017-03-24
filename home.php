<?php
include('session.php');
?>

<html lang="en" dir="ltr">
<head>
<title>LAN-Based Voting System</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                              
<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/sky-forms.css">
<link rel="stylesheet" href="css/layout.css" type="text/css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>   
<script type="text/javascript" src="js/jquery-latest.min.js"></script>

<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<!-- Add jQuery library -->

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


 






</head>

<body>


<?php
include('header.php');


?>

<div class="wrapper row2">
	<div id="container">


		<?php
		include('body.php');
		include('content.php');
		?>	
	</div>
</div>

<?php
include('footer.php');
?>






</body>
</html>
