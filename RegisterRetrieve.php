<?php
function __autoload($classname)
{
include "$classname.php"; 
}
$obj = new connect();
$st=$obj->con();

//echo "Hello";
if (isset($_POST['sub'])) {
extract($_POST);

$line = implode(",",$_POST['lang']);

if(isset($_FILES['iname']))
{
	echo "hello";
    $name = $_FILES['iname']['name'];
        
        $type = $_FILES['iname']['type'];
        
        $size = $_FILES['iname']['size'];
        
        $tmp_name = $_FILES['iname']['tmp_name'];
        
        $loc = 'img/';
        
        $ext = substr($name,strpos($name,'.')+1);
        
        if($_FILES['iname']['size']>= '10000' || $_FILES['iname']['size']<="7000000")
        {
            //echo $size;
        }
            else{
            //  echo "size is not supported";
            }
        $val = $_FILES['iname']['size'];

         if($ext == 'jpg' || $ext == 'png')
        {
            {
            move_uploaded_file($tmp_name,$loc.$name);
            
        }
        }   
        } 
   $qry="update register SET uname='$uname',pwd='$pwd',emailid='$emailid',gen='$gen',lang='$line' ,mobile='$mobile',10marks='$marks_10',12marks='$marks_12',iname='$name',size='$size' WHERE id=$sid ";
   print_r($qry); 
        //$this->con();
        $res=mysqli_query($st,$qry);
        print_r($res);
        
                	

$upd= new update();
$upd->updatedata($_POST);
print_r($_POST);
//exit();

header("location:ShowData.php");


}

?>