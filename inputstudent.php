<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="icon" type="image/ico" href="logophb.ico" />

<title>New Student</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style4 {
	text-align: left;
	font-family: Calibri;
	font-size: large;
	color: #FFFFFF;
	background-color: #4981E8;
}
.auto-style5 {
	font-family: Calibri;
	font-size: small;
	color: #6B6E79;
}
.auto-style7 {
	text-align: left;
}
.auto-style8 {
	font-family: Calibri;
	font-size: xx-large;
	color: #4981E8;
}
.auto-style9 {
	color: #4981E8;
}
</style>
<img alt="" height="119" src="logophb.png" style="float: left" width="151" /><br />
<br />
<br />
<br />
<span class="auto-style8"><strong>Pelita Harapan Bangsa - Add Student</strong></span><br />


</head>

<body style="height: 561px">

<p class="auto-style4"><strong>Personal Details</strong></p>

<form action="http://localhost/insertstudent.php" method="post">

	<table style="font: normal normal normal medium Calibri; width: 45%" align="center">
		<tr>
			<td class="auto-style5" style="width: 128px">NIK</td>
			<td class="auto-style7" style="width: 236px">
			<input name="mynik" style="width: 89px" type="text" class="auto-style9" autofocus/></td>
		</tr>
		<tr>
			<td class="auto-style5" style="width: 128px">NISN</td>
			<td class="auto-style7" style="width: 236px">
			<input name="mynisn" type="text" class="auto-style9" /></td>
		</tr>
		<tr>
			<td class="auto-style5" style="width: 128px">Full Name</td>
			<td class="auto-style7" style="width: 236px">
			<input name="myfname" style="width: 183px" type="text" class="auto-style9" /></td>
		</tr>
		<tr>
			<td class="auto-style5" style="width: 128px">Nickname</td>
			<td class="auto-style7" style="width: 236px">
			<input name="mynickname" style="width: 114px" type="text" class="auto-style9" /></td>
		</tr>
		<tr>
			<td class="auto-style5" style="width: 128px">Gender</td>
			<td class="auto-style7" style="width: 236px">
			<select name="mygender" style="width: 86px" class="auto-style9">
				<option>Male</option>
				<option>Female</option>
			</select></td>
		</tr>
		
		<tr>
			<td class="auto-style5" style="width: 128px">Religion</td>
			<td class="auto-style7" style="width: 236px">
			<select name="myreligion" style="width: 107px" class="auto-style9">
				<option>Moslem</option>
				<option>Budha</option>
				<option>Christian</option>
				<option>Rome Catholic</option>
				<option>Hindu</option>
			</select></td>
		</tr>
		
		<tr>
			<td class="auto-style5" style="width: 128px">Date of Birth</td>
			<td class="auto-style7" style="width: 236px">
				<select name="dateofbirth" style="width: 65px" class="auto-style9">
  					<?php for ($i = 1; $i <= 31; $i++) : ?>
  					<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  					<?php endfor; ?>
				</select><span class="auto-style9">&nbsp; &nbsp;
				
				</span>
				
				<select name="monthofbirth" style="width: 66px" class="auto-style9">
  					<?php for ($i = 1; $i <= 12; $i++) : ?>
  					<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  					<?php endfor; ?>
				</select>

				<select name="yearofbirth" style="width: 81px" class="auto-style9">			
					<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
  					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  					<?php endfor; ?>
				</select><span class="auto-style9"> </span> </td>
		</tr>
		
		<tr>
			<td class="auto-style5" style="width: 128px">Father's Name</td>
			<td class="auto-style7" style="width: 236px">
			<input name="myfather" style="width: 171px" type="text" class="auto-style9" /></td>
		</tr>
		<tr>
			<td class="auto-style5" style="width: 128px">Mother's Name</td>
			<td class="auto-style7" style="width: 236px">
			<input name="mymother" style="width: 166px" type="text" class="auto-style9" /></td>
		</tr>
		<tr>
			<td class="auto-style5" style="width: 128px">Address</td>
			<td class="auto-style7" style="width: 236px">
			<input name="myaddress" style="width: 283px" type="text" class="auto-style9" /></td>
		</tr>
		<tr>
			<td class="auto-style5" style="width: 128px">Phone</td>
			<td class="auto-style7" style="width: 236px">
			<input name="myphone" style="width: 165px" type="text" class="auto-style9" /></td>
		</tr>
		<tr>
			<td class="auto-style5" style="width: 128px">Grade</td>
			<td class="auto-style7" style="width: 236px">
			<select name="mygrade" style="width: 105px" class="auto-style9">
			<?php for ($i = 1; $i <= 9; $i++) : ?>
  					<option value="<?php echo $i; ?>"><?php echo 'Grade '.$i ?></option>
  					<?php endfor; ?>
			</select></td>

		</tr>
	</table>
	<hr /><p class="auto-style1">
	<input name="Submit" type="submit" value="Update" /></p>


</form>

</body>

</html>
