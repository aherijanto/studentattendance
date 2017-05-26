

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHBS PERIODIC Attendance Reports</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
	font-family: Candara;
	color: #0000FF;
	font-size: x-large;
}

.mimostyle {
	text-align: center;
	font-family: Calibri;
	color: #0000FF;
	font-size: medium;
}
</style>
</head>

<body>

<p class="auto-style1"><strong>PHBS PERSONEL STAFF ATTENDANCE REPORTS</strong></p>

<form method="POST" action="">
SELECT DATE<br/><br/>
FROM &nbsp&nbsp&nbsp <input type="date" name="fromdate" /><br/>
TO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="date" name="todate" /><br/><br/>
<input type="Submit" value="Process" name="mimo" />
</form>

<p class="auto-style1">

</p>
</body>

<?php
session_start();
if (isset($_POST['mimo'])) {
$fromdate1 = date('Y-m-d',strtotime($_POST['fromdate']));
$todate1 = date('Y-m-d',strtotime($_POST['todate']));	


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
<table class="mimostyle" >
        <thead>
			<strong>
            <tr>
                <td align="center" >NIK</td>
                <td align="center" >NAME</td>
                <td align="center" >DAY OF WEEK</td>
            </tr>
			<tr><td colspan="3"><hr/></td></tr>
       </strong>
		</thead>
        <tbody>
       <?php
          $today=date("Y-m-d");
           $sql = "select mstudents.nik,mstudents.fname,attendtrans.nik,attendtrans.dattend,attendtrans.mtime,COUNT(attendtrans.dattend) as dayofweek from mstudents,attendtrans where (mstudents.nik=attendtrans.nik) AND (attendtrans.nik like '1%') AND (attendtrans.dattend BETWEEN '$fromdate1' and '$todate1') group by attendtrans.nik";
		   //$sql = "SELECT attendtrans.nik, attendtrans.dattend, attendtrans.mtime,mstudents.nik,mstudents.fname FROM `attendtrans` left join `mstudents` on attendtrans.nik=mstudents.nik where attendtrans.dattend='$today'  order by attendtrans.mtime asc";
			$result = mysql_query($sql,$conn);
            $medate=date('Y-m-d',strtotime('1970-01-01'));
			while($row = mysql_fetch_assoc($result)) {            
				$dnow=date('Y-m-d',strtotime($row['dattend']));
				//if ($medate<>$dnow) {
				//	echo '<tr><td colspan="3"><hr/></td></tr>';
				//	echo '<tr><td colspan="3"><br/><br/></td></tr>';
					
					
				//	echo '<tr><td colspan="3" bgcolor="#D6EAF8"><strong>'.date('l, jS F Y',strtotime($dnow)).'</strong></td></tr>';
						
				
				?>
				<tr>
					
					<td><?php echo $row['nik']?></td>
                    <td><?php echo $row['fname']?></td>
                    <td><?php echo $row['dayofweek']?>&nbsp&nbsp day(s)</td>
                </tr>
				
            <?php
            }
			
            ?>   
			<tr><td colspan="3"><hr/></td></tr>
            </tbody>
            </table>





    
        

<?php
}
?>


</html>
