<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("votedatabase",$konek) or die("Cannot connect to the database");


$idnum=($_GET['idnum'])?$_GET['idnum']:'';

$query = mysql_query("select * from qrcodenum where idnum = '$idnum' ");
$rows = mysql_fetch_array($query);

$class = $rows['department'] ;
$qrcode = $rows['qrcode'] ;
$voter = $rows['totalvoter'];
$total = $qrcode + $voter;


?>

<head>
<title>Print QrCode</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />


<meta charset="iso-8859-1">
<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/sky-forms.css">


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>


<style>
.clear{display:block; width:100%; clear:both;margin-bottom:115px;}
.printButtonClass{ display : none }


 @media print {
   .noprint{
      display: none !important;
   }
}
</style>

<script>

 function chromeTimeDelay(){
        if (navigator.userAgent.indexOf("Chrome") > 0){
            var d =e = new Date();
            while(d.getTime()<(e.getTime()+1000)){
            d = new Date();
            }
        }
    }



    function dontdisplaycheckbox(){
      
      
chromeTimeDelay();     
var x = confirm('The QRCode will automatically deleted after the print?');
if(x==true){
chromeTimeDelay();	
var y=confirm('Do you really want to print this?');
if(y==true){
	window.print();window.location.href='deleteqr.php?idnum=<?php echo $idnum;?>';
			}
			}
			else
			{return;}

	  }



</script>




</head>

<body>
<br><center><button class="noprint" onclick="dontdisplaycheckbox(); " style="display:inline; padding:10px;">Print Now</button>
<a href="qrcode.php"><button  class="noprint" style="display:inline; padding:10px;">Back</button></center></a>
<div style="display:block; width:100%; clear:both;"></div>
<input  type="hidden" name="idnum" value="<?=($_GET['idnum'])?$_GET['idnum']:''?>">
<?php



$y=1;
$votecount = $rows['totalvoter'] +1;
$id = 1;
for($x=1;$votecount>$x;$x++)
{


?>
<table border="1" style="float:left;">

  


<tr>
    <td>Copy# <?php echo"$x"; ?><span style="float:right;"></span></td>
	
  </tr>
  
  <tr>
  
    <td ><center>
	<div id="<?php  echo $id ?>" style="width:100px; height:100px;" ></div></center>
	</td>
	
  </tr>
  <tr>
    <td ><b>Dept.</b><input size="10%" id="<?php echo "$qrcode"; ?>"  value="<?php echo $class;?>" readonly /> </td>
	
  </tr>
 
 

</table>



<?php if($y==20)
{
?>

<div class="clear"></div>
<p>QR Accession#: <?php echo $qrcode;?>-<?php echo $total;?></p>	
<?php
$y=0;
}
?>	
	
	
	

<script type="text/javascript">

var a = <?php echo "$id" ?>;

var qrcode = new QRCode(document.getElementById(a), {
	width : 100,
	height : 100
});


function makeCode () {		
	
	
	qrcode.makeCode( "<?php echo "$qrcode"; ?>");
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>


<?php
//(rand(111,999)) **random number
$id = $id +1;
$qrcode = $qrcode + 1 ;
$y=$y+1;




 
}
?>




</body>