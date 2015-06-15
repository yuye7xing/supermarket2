<?php
//产品召回
include 'PHP/daconnect.php';
$sumbit=$_POST['Submit'];
if ($sumbit==""){
	include 'html/return.html';
}
if ($sumbit=="自动补全"){
	$name=$_POST['conmdity_name'];
	$sql="SELECT * FROM `m_commodity`,`m_type`,`m_suppliers` where m_commodity.mt_id=m_type.mt_id and m_commodity.ms_id=m_suppliers.ms_id and m_commodity.mc_name LIKE '$name'";
	$result=mysqli_query($con, $sql);

	if($r=mysqli_fetch_row($result)){
		$conmdity_name=$r[1];
		$producer_name=$r[12];
		$producer_add=$r[15];
		$money=$r[5];
		$type=$r[10];
	}
	else {
		echo "<script>alert('名称输入错误')</script>";
	}
	include 'html/return.html';
}
if($sumbit=="召回"){
	$name=$_POST['conmdity_name'];
	$end_money=$_POST['end_money'];
	$time=$_POST['date'];
	$money=$_POST['money'];
	$producer_name=$_POST['producer_name'];
	$producer_add=$_POST['producer_add'];
	$type=$_POST['type'];

	$sql3="INSERT INTO `return` (r_id, conmdity_name,type, producer_name, producer_add, money, return_money, time) VALUES (NULL, '$name', '$type','$producer_name', '$producer_add', '$money', '$end_money', '$time')";
	$re=mysqli_query($con,$sql3);
    
	$sql2="DELETE FROM `m_commodity` WHERE mc_name LIKE '$name'";

	$result=mysqli_query($con, $sql2);
	if(mysqli_affected_rows($con)>0){
		// 		echo $name.$end_money;
		echo "<script>alert('添加完成，继续添加？');location.href=\"return.php\";</script>";
	}



}