<?php

class connect
{
var $db_host="localhost";
var $username="root";
var $password="";
var $database="projectexam";
var $myconn;


function con()
{
$con = mysqli_connect($this->db_host,$this->username,$this->password,$this->database);
if ($con) {
	//echo "Connection Established";
}else
{
	//echo "Connection Aborted";
}

 return $this->myconn=$con;
}
}
//$obj= new connect();
//$obj->con();
?>