<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<fieldset>
<LEGEND>Registration</LEGEND>
<form method="post" action="register.php"  enctype="multipart/form-data">
	<table>
		<tr>
			<td>Enter Your Username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Enter Your Password</td>
			<td><input type="text" name="pwd"></td>
		</tr>
		<tr>
			<td>Enter Your Email Id</td>
			<td><input type="emailid" name="emailid"></td>
		</tr>
	<!--	<tr>
			<td>Confirm Your Password</td>
			<td><input type="text" name="pwd"></td>
		</tr> -->
		<tr>
			<td>Radio Button: Are you male or female?</td>
 <td>  <input type="radio" name="gen" value="male">Male
    <input type="radio" name="gen" value="female">Female
 	</td>
 	
 		</tr>
 		<tr>
			<td>Check You Hobbies:</td>
    <td><input type="checkbox" name="lang[]" value="Cricket">Cricket
    <input type="checkbox" name="lang[]" value="Basketball">Basketball
    <input type="checkbox" name="lang[]" value="Hockey">Hockey</td>
		</tr>
		<tr>
		<td>Enter Your Mobile No:</td>
		<td><input type="text" name="mobile"></td>
		</tr>
		<tr>
		<td>Enter Your 10th %ge:</td>
		<td><input type="text" name="marks_10"></td>
		</tr>
		</tr>
		<tr>
		<td>Enter Your 12th %ge:</td>
		<td><input type="text" name="marks_12"></td>
		</tr>

		<tr>
			<td>Browse Image</td>
			<td><input type="file" name="iname"></td>
		</tr>
		<tr>
			<td>
				<select name="priority">
					<option value="admin">
						admin	
					</option>
					<option value="guest">
						guest
					</option>
					<option value="superadmin">
						superadmin
					</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="Register" name="reg"><br></td>
		</tr>
	</table>
</form>
</fieldset>
</body>
</html>
<?php
function __autoload($classname)
{
include "$classname.php"; 
}
$obj = new connect();
$obj->con();

if(isset($_POST['reg']))
{
$ins= new insert();
$ins->insertreg();
}



?>