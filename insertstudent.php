<?php 
include 'myconnect.php';
$mynik = $_POST["mynik"];
$mynisn = $_POST["mynisn"];
$myfname =$_POST["myfname"];
$mynickname=$_POST["mynickname"];
$mygender =$_POST["mygender"];
$myreligion=$_POST["myreligion"];
$myyearofbirth=$_POST["yearofbirth"];
$mymonthofbirth=$_POST["monthofbirth"];
$mydateofbirth=$_POST["dateofbirth"];
$myfather=$_POST["myfather"];
$mymother=$_POST["mymother"];
$myaddress=$_POST["myaddress"];
$myphone=$_POST["myphone"];
$mygrade=$_POST["mygrade"];

if ($myyearofbirth != '' && $mymonthofbirth != '' && $mydateofbirth != '') {
  // Generate date of birth in format of YYYY-mm-dd
  $mydate = $myyearofbirth.'-'.$mymonthofbirth.'-'.$mydateofbirth;
}

$sqlinsert="INSERT INTO mstudents (nik,nisn,fname,nickname,gender,religion,dob,fathername,mothername,addr1,phone1,mgrade,foldpicture) VALUES ('$mynik','$mynisn','$myfname','$mynickname','$mygender','$myreligion','$mydate','$myfather','$mymother','$myaddress','$myphone','$mygrade','gradepics')";
$resultinsert=mysql_query($sqlinsert,$conn);

if ($resultinsert)
   {
echo "record added!";
}
else
{
echo "something went wrong";
echo mysql_error();
}

?>