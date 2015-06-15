<?php
$id=$_GET['id'];
include 'daconnect.php';
$delete="DELETE FROM `m_order` WHERE `m_order`.`mo_id` = $id";
$result=mysqli_query($con, $delete);
if($result){
	echo "成功";
}else {
	echo "失败";
}