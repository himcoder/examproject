<!DOCTYPE html>
<html>
<head>
	<title>Subject ADD</title>
</head>
<body>
<fieldset>
	<form method="POST" action="addsub.php">
		<table>
			<tr>
				<td>
					Enter Your Subject:
				</td>
				<td>
					<input type="text" name="subject">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Save">
				</td>
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

if(isset($_POST['submit']))
{
$ins= new insert();
$ins->insertsub();
}

 ?>
