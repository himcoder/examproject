<?php
function __autoload($classname)
{
include "$classname.php"; 
}
$obj = new connect();
$test = $obj->con();

if(isset($_POST['submit']))
{
$ins= new insert();
$ins->inserttest();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test ADD</title>
</head>
<body>

<fieldset>
	<form method="POST" action="addtest.php"> 
		<table>
			<tr>
				<td>
					<select name = "subid">
						<option>
							Select Subject
						</option>
						<?php
$qry = "select * from subject ";
$run =mysqli_query($test,$qry);
//print_r($run);
//exit;
while($row = mysqli_fetch_assoc($run))
{

?>
  <option value="<?php echo $row['subname']; ?>"><?php echo $row['subname']; ?></option>
  <?php
}
		?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Enter Your Test Here:
				</td>
				<td>
					<input type="text" name="test">
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
</fieldset>
</form>
</body>
</html>