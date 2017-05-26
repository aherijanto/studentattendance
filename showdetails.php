
<?php
	include 'myconnect.php';
	
session_start();
	
	if (isset($_REQUEST['submitid']))
	{
  $mynik=$_REQUEST['myid'];
//  echo '<p class="auto-style2"><strong>'. $mynik .'</strong></p>';
 
  }
  else { echo "Empty"; exit;
} 

$_SESSION['nik']=$mynik;

$sql = "SELECT fname, foldpicture FROM `mstudents` where nik= $mynik";
$result = mysql_query($sql,$conn);

if (!$result){
	echo 'Data Not Found';
	exit;
	header("Refresh: 1;url=http://localhost/attendphb.php/");
}

while($row = mysql_fetch_assoc($result)) {  
//echo $mynik;
//echo $row['fname'];
//echo $row['foldpicture'];
$foldpic=$row['foldpicture'];
$foldpic = str_replace('\\', '/', $foldpic);
$fname1=$row['fname'];
$datenow=date("Y-m-d");
$timenow=date("H:i:s");

//check record exist
$sqlsearchrecord="SELECT * FROM attendtrans WHERE nik=$mynik and dattend='$datenow'";

$resultsearch = mysql_query($sqlsearchrecord,$conn);

$rowsearch=mysql_num_rows($resultsearch);

if ($rowsearch >=1 ){
	//echo 'Data already exist';
	}	
else
	{
	//$myidno=$mynik+$datenow;
	$sqlinsert= "INSERT INTO attendtrans (notrans,dattend,mtime,nik,mstate) VALUES ($mynik+'.'+'$datenow','$datenow','$timenow',$mynik,'IN') ";
	$resultinsert=mysql_query($sqlinsert,$conn);
	//echo 'Data inserted';	
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Show Details</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	text-align: center;
	font-family: Calibri;
	font-size: x-large;
	color: #3030A5;
}

.auto-style3 {
	text-align: center;
	font-family:Calibri;
	color:maroon; 
	
}
}
</style>
</head>

<body style="height: 376px">
<div class="auto-style1">
<form>
<img alt="teso1" height="420" src="/<?php echo $foldpic ?>/<?php echo $mynik?>.jpg"  width="337" border="1" />
	
	</form> 
</div>
<?php $today = date("H:i:s");?>
<p class="auto-style2"><strong>WELCOME</strong></p>
<p class="auto-style2"><strong><?php echo $row['fname'] ?> </strong></p>
<p class="auto-style3"><strong><?php echo date("d-m-Y") ?> </strong></p>
<p class="auto-style3"><strong><?php echo date("H:i:s") ?> </strong></p>
<?php header("Refresh: 1;url=http://localhost/attendphb.php/"); ?>

</body>
</html>

