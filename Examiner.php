<title>Examiner</title>
<?php

function __autoload($classname)
{
include "$classname.php"; 
}
$obj = new connect();
$st=$obj->con();
?>
<form method="POST" action="Examiner.php">
				<select name = "testid">
						<option>
							Select TEST
						</option>
						<?php
$rel = "select * from test ";
$res =mysqli_query($st,$rel);
//print_r($run);
//exit;
while($row = mysqli_fetch_assoc($res))
{

?>
  <option value="<?php echo $row['test']; ?>"><?php echo $row['test']; ?></option>
  <?php
}
		?>
					</select>	
<?php
$qry="select * from register";
$run=mysqli_query($st,$qry);
?>

<?php
while($query2=mysqli_fetch_assoc($run))
{
	?>
	
<input type='checkbox' name='selected' value="<?php echo $query2['uname']; ?>"><?php echo $query2['uname']; ?><br>
<?php 
}
?>
<input type="submit" name="submit" value="submit">
</form>	
<?php

if (isset($_POST['submit'])) 
{
$ins= new insert();
$ins->insertexamees();	
}

?>

