<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHBS Attendace Reports</title>
<style type="text/css">
.auto-style2 {
	color: #2255CC;
	font-size: large;
	font-family: Calibri;
}
</style>
</head>

<body>

<table style="width: 100%">
	<tr>
		<td><img alt="" height="56" src="logophb.png" width="76" /><span class="auto-style2"><strong>ATTENDANCE 
		REPORTS TODAY</strong></span></td>
	</tr>
	<tr>
		<td><hr /></td>
	</tr>
</table>
</body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database= "phbs";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$db_found=mysql_select_db($database);
if ($db_found) {

print " ";
}
else {
print "Database NOT Found";
}
?>
<table align="center" border="1" style="font: small-caption " >
        <thead>
            <tr>
                <td align="center" width="3">NIK</td>
                <td align="center" >NAME</td>
                <td align="center" >TIME</td>
                <td align="center" style="width: 44px">PROFILE</td>
            </tr>
        </thead>
        <tbody>
       <?php
          $today=date("Y-m-d");
           $sql = "SELECT attendtrans.nik, attendtrans.dattend, attendtrans.mtime,mstudents.nik,mstudents.fname,mstudents.foldpicture FROM `attendtrans` left join `mstudents` on attendtrans.nik=mstudents.nik where attendtrans.dattend='$today'  order by attendtrans.mtime asc";
			$result = mysql_query($sql,$conn);
            while($row = mysql_fetch_assoc($result)) {            ?>
                <tr>
                    <td><?php echo $row['nik']?></td>
                    <td><?php echo $row['fname']?></td>
                    <td><?php echo $row['mtime']?></td>
                    <td style="width: 44px" align="center">
					<img alt="pics" height="44" src="/<?php echo $row['foldpicture']; ?>/<?php echo $row['nik'];?>.jpg"  width="35" border="0" /></td>
                </tr>

            <?php
            }
            ?>   
            </tbody>
            </table>





    
        




</html>
