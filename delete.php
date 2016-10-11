<?php
    function deleteData($del) 
    {   
        extract($del);
        $sql = "delete from new where id= $sid" ;
    	$result = mysqli_query($this->myconn,$sql);
        return $result;
        }
?>