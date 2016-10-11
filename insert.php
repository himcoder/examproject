<?php
class insert extends connect
{
function insertreg()
{
	$obj= new connect();	
$obj->con();

extract($_POST);
$lang = implode(",",$_POST['lang']);

if(isset($_FILES['iname']))
	{
		//extract($_POST);
		//echo "hello";
	 	$name = $_FILES['iname']['name'];
	 	
	 	$type = $_FILES['iname']['type'];
	 	
	 	$size = $_FILES['iname']['size'];
	 	
	 	$tmp_name = $_FILES['iname']['tmp_name'];
	 	
	 	$loc = 'img/';
	 	
	 	$ext = substr($name,strpos($name,'.')+1);
	 	
	 	if($_FILES['iname']['size']>= '10000' || $_FILES['iname']['size']<="23000000")
	 	{
	 		//echo $size;
	 	}
	 		else{
	 		//	echo "size is not supported";
	 		}
	 	$val = $_FILES['iname']['size'];

	 	 if($ext == 'jpg' || $ext == 'png')
	 	 	{
	//echo $lang;
	//print_r($_POST);
	//exit;
	$qry = "insert into register(uname,pwd,emailid,gen,lang,mobile,10marks,12marks,iname,size,priority)values('$uname','$pwd','$emailid','$gen','$lang','$mobile','$marks_10','$marks_12','$name','$size','$priority')";
	print_r($qry);
		
	$run = mysqli_query($this->con(),$qry);
	//print_r($run);
	if($run)
	{
			move_uploaded_file($tmp_name,$loc.$name);
	 	  	//echo "data saved";
		//echo "Data inserted";
		
		}
		else
		{
			//echo "Data Not Inserted";
			
			}
	
	}
}
}
function insertsub()
{
$obj= new connect();	
$obj->con();
extract($_POST);
$qry="insert into subject (subname)values('$subject')";

$run=mysqli_query($this->con(),$qry);
//print_r($run);
}

function inserttest()
{
	$obj= new connect();	
$obj->con();
extract($_POST);
	$qry="insert into test(test,subid)values('$test','$subid')";
	$run=mysqli_query($this->con(),$qry);
	//print_r($run);
}
function insertques()
{
$obj= new connect();	
$obj->con();
extract($_POST);
	$qry="insert into question(testid,quesname,answer1,answer2,answer3,answer4,correctanswer)values('$testid','$quesname','$answer1','$answer2','$answer3','$answer4','$correctanswer')";
	$run=mysqli_query($this->con(),$qry);
}
function insertexamees()
{
	$obj= new connect();	
$obj->con();
extract($_POST);
	$qry="insert into examiner(test,selected)values('$testid','$selected')";
	//print_r($qry);
	$run=mysqli_query($this->con(),$qry);

}





}
//$ins= new insert();
//$ins->insertdata();
?>