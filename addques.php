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
$ins->insertques();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Question Add
	</title>
</head>
<body>
<fieldset>
	<form method="POST" action="addques.php">
		<table>
			<tr>
				<td>
				<select name = "testid">
						<option>
							Select Subject
						</option>
						<?php
$qry = "select * from test ";
$run =mysqli_query($test,$qry);
//print_r($run);
//exit;
while($row = mysqli_fetch_assoc($run))
{

?>
  <option value="<?php echo $row['test']; ?>"><?php echo $row['test']; ?></option>
  <?php
}
		?>
					</select>	
				</td>
			</tr>
			<tr>
				<td>Enter Your Question Here:</td>
			<td><input type="text" style="width:auto" style="height:100px" name="quesname"></input></td>
			</tr>
			<tr>
				<td>Enter Answer 1</td>
			<td><input type="text" style="width:auto" style="height:100px" name="answer1"></input></td>
			</tr>
			<tr>
				<td>Enter Answer 2</td>
			<td><input type="text" style="width:auto" style="height:100px" name="answer2"></input></td>
			</tr>
			<tr>
				<td>Enter Answer 3</td>
			<td><input type="text" style="width:auto" style="height:100px" name="answer3"></input></td>
			</tr>
			<tr>
				<td>Enter Answer 4</td>
			<td><input type="text" style="width:auto" style="height:100px" name="answer4"></input></td>
			</tr>
			<tr>
				<td>True Answer</td>
			<td><input type="text" style="width:auto" style="height:100px" name="correctanswer"></input></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>