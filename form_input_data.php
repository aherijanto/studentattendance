<?php
if(isset($_POST['submit']))
{
include 'myconnect.php';

$start = $_POST['start'];



$sql="INSERT INTO attendtrans (notrans,dattend,mtime,nik,mstate) VALUES ('$start','2016-02-22','07:58:20','$start','testself')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($conn);

}
?>

<html>
<head>
<title>Form Input Data</title>

</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" id="start" name="start" />

<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>