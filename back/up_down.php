<?php
include 'PHP/daconnect.php';
$conmdity_name=$_GET['conmdity_name'];
$sumbit=$_POST['Submit'];
if ($sumbit==""){
	include 'html/up_down.html';
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
		include 'html/up_down.html';
}
if($sumbit=="提交"){
	$name=$_POST['conmdity_name'];
	$end_money=$_POST['end_money'];
	
	$query="UPDATE `m_commodity` SET `mc_money` = $end_money WHERE `mc_name` LIKE '$name'";
	$re=mysqli_query($con, $query);
 if(mysqli_affected_rows($con)>0){
// 		echo $name.$end_money;
		echo "<script>alert('完成');location.href=\"commodity.php\";</script>";
 }
}