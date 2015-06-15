<?php
include 'daconnect.php';
$id=$_GET['id'];
$value=$_GET['value'];
$name=$_GET['name'];
if($id=="ms_name"){
	$sql="SELECT *  FROM `m_suppliers` WHERE `ms_name` LIKE '$value'";
	$result=mysqli_query($con, $sql);
	if ($r=mysqli_fetch_row($result)){
		$ms_id=$r[0];
	}
	$sql2="UPDATE `m_commodity` SET `ms_id` = '$ms_id' WHERE mc_name LIKE '$name'";
	$result2=mysqli_query($con, $sql);
	
}