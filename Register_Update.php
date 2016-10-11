<title>Register Update</title>
<?php
//error_reporting(0);


function __autoload($classname)
{
include "$classname.php"; 
}
$obj = new connect();
$st=$obj->con();

$qry = "select * from register ";
$run = mysqli_query($st,$qry);
$row = mysqli_fetch_assoc($run);
 { 
 $g = $row['gen'];
 $l = $row['lang'];
}

$id=$_GET['id'];
$query=mysqli_query($st,"select * from register where id='$id'");
//echo "<ul>";
while($query2=mysqli_fetch_assoc($query))
{
?>

<form method='POST' action='RegisterRetrieve.php'  enctype='multipart/form-data'>
<table>


<p><input type="hidden" name="sid" value="<?php echo $query2['id']; ?>"></p>
<tr>
<td>
First Name:
</td>
 <td><input type="text" name="uname" value="<?php echo $query2['uname']; ?>"></td>
</tr>
<tr>
<td>Password:</td>
    <td><input type="password" name="pwd" value="<?php echo $query2['pwd']; ?>"></td>
</tr>
<tr>
<td>Email Id:</td>    
<td><input type="text" name="emailid" value="<?php echo $query2['emailid']; ?>"
</td>
</tr>
<tr>
<td>Radio Button: Are you male or female?</td>
    <?php
	if ($g == "male"){
echo "<td><input type='radio' name='gen' value='Male' id='gen' checked> Male <input type='radio' name='gen' value='Female' id='gen'> Female </td>";
 }
 else
 {
 echo "<td><input type='radio' name='gen' value='Male' id='gen'> Male <input type='radio' name='gen' value='Female' id='gen' checked> Female </td>";
 }
	?>
</tr>
<tr>	
<td>Check Box: Check the languages you know?</td>
<td><?php
	$lang=explode(',',$l); 
	//print_r($lang);
        if(in_array('Cricket', $lang))
            echo '<input type="checkbox" name="lang[0]" value="Cricket" checked>Cricket';
        else
            echo '<input type="checkbox" name="lang[0]" value="Cricket">Cricket';
        if(in_array('Basketball', $lang))
            echo '<input type="checkbox" name="lang[1]" value="Basketball" checked>Basketball';
        else
            echo '<input type="checkbox" name="lang[1]" value="Basketball">Basketball';

        if(in_array('Hockey', $lang))
            echo '<input type="checkbox" name="lang[2]" value="Hockey" checked>Hockey';
        else
            echo '<input type="checkbox" name="lang[2]" value="Hockey">Hockey'."<br>";  
	?>   
</td>
</tr>
<tr>
<td>Mobile No:</td>
<td><input type="text" name="mobile" value="<?php echo $query2['mobile']; ?>"
</td>
</tr>
<tr>
<td>10th Marks:</td>
<td><input type="text" name="marks_10" value="<?php echo $query2['10marks'];?>"
</td>
</tr>
<tr>
<td>
12th Marks:</td>
<td><input type="text" name="marks_12" value="<?php echo $query2['12marks'];?>"</td>
</tr>
<tr>
<td>
Browse Image:</td>
<td><img src='img/<?php echo $query2['iname'];?>' width='150px' height='150px'></td>
<td><input type="file" name="iname" value="<?php echo $query2['iname'];?>"></td>

</tr>
<tr>
    <td>
        Size:
    <input type="text" name="size" value="<?php echo $query2['size'];?>" disabled>
    </td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" value="submit" name="sub"><br>
</td>
</tr>


</table>
</form>
<?php
}
?>