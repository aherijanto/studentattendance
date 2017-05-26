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
	border: 1px solid #800000;
}
</style>
</head>

<body>
<?php
	include 'myconnect.php';
	
session_start();
	
	if (isset($_REQUEST['submit']))
	{
  $mynik=$_REQUEST['mynik'];
  echo '<p class="auto-style1"><strong>'. $mynik .'</strong></p>';
 
  }
  else { echo "Empty"; exit;
} 

$_SESSION['nik']=$mynik;

?>
<form method="get" action="http://localhost/upfold.php">
	<table align="center" style="font: small-caption; width: 0%;" cellpadding="2" class="auto-style2" >
        <thead>
            <tr>
                <td align="center" style="width: 144px" >NAME</td>
                <td align="center" >PIC.FOLD</td>
               
            </tr>
        </thead>
        <tbody>
	<?php 
	 	$sql = "SELECT fname, foldpicture FROM `mstudents` where nik= $mynik";
	 	$result = mysql_query($sql,$conn);
          
  
            while($row = mysql_fetch_assoc($result)) {            ?>
                <tr> 
                    <td style="width: 144px;" class="auto-style1" width="30"><?php echo $row['fname'] ?></td>
                    <td style="height: 32px">
					<input name="folder" type="text" style="width: 261px"  autofocus/></td>
                </tr>
            </tbody>
            <?php 
           
            } ?>
            <?php  $_COOKIE['mynik']= $mynik; ?>
            </table>
	<div class="auto-style1"><input name="submit" type="submit" value="submit"/></div>
</form>
</body>
</html>
