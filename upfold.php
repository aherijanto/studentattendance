<?php
include 'myconnect.php';

session_start();

$mynik1=$_SESSION['nik'];

if (isset($_REQUEST['submit']))
	{
 
	$folder=$_REQUEST['folder'];
	$mynik1 = $_SESSION ['nik'];

}
echo 'NIK ='.$_SESSION['nik'].'</br>';
echo 'FOLDER ='.$folder.'</br>';

$sqlupdate = "UPDATE mstudents SET foldpicture ='".$folder."' where nik ='".$mynik1."'";

$resultupdate = mysql_query($sqlupdate,$conn);

if (!$resultupdate){
echo "Failed";
}
else
{echo "Done</br></br></br>";

}
header("Refresh: 1;url=http://localhost/searchnik.php/");

?>