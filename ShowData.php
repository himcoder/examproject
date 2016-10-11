<?php

function __autoload($classname)
{
include "$classname.php"; 
}
$obj = new connect();
$st=$obj->con();


$start=0;
$limit=2;
$id="";

if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}


$query=mysqli_query($st,"select * from register LIMIT $start,$limit");
//echo "<ul>";
echo '<table width="650px" align="center" border="1px">';
echo '<th>id</th><th>Username</th><th>Password</th><th>emailid</th><th>Gender</th><th>Language</th><th>Mobile</th><th>Marks 10th</th><th>Marks 12th</th><th>Image Name</th><th>Priority</th>';
echo "<form method='GET' action='Register_Update.php'>";
while($query2=mysqli_fetch_assoc($query))
{
	?>

<tr><td><?php echo $query2['id']; ?></td>
    <td><?php echo $query2['uname']; ?></td>
    <td><?php echo $query2['pwd']; ?></td>
    <td><?php echo $query2['emailid']; ?></td>
    <td><?php echo $query2['gen'];?></td>
    <td><?php echo $query2['lang'];?></td>
    <td><?php echo $query2['mobile']; ?></td>
    <td><?php echo $query2['10marks'];?></td>
    <td><?php echo $query2['12marks'];?></td>
    <td><?php echo $query2['iname'];?></td>
    <td><?php echo $query2['priority']; ?></td>
        <td><a href="Register_Update.php?id=<?php echo $query2['id']; ?>">EDIT</a></td>
    </tr>
	
<?php

}

	echo "</table>";



$rows=mysqli_num_rows(mysqli_query($st,"select * from register"));
$total=ceil($rows/$limit);

if($id>1)
{
echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}
?>