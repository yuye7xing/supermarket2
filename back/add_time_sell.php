<?php
//添加促销
include 'PHP/daconnect.php';
$conmdity_name=$_GET['conmdity_name'];
$sumbit=$_POST['Submit'];
if ($sumbit==""){
	include 'html/add_time_sell.html';
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
	include 'html/add_time_sell.html';
}
if($sumbit=="提交"){
	$name=$_POST['conmdity_name'];
	$end_money=$_POST['end_money'];
	$date=$_POST['date'];
	$end_date=$_POST['end_date'];
	
	$sql="SELECT *  FROM `m_commodity` WHERE `mc_name` LIKE '$name'";
	$result=mysqli_query($con, $sql);
	if(mysqli_affected_rows($con)==1){
		if($r=mysqli_fetch_row($result)){
			$mc_id=$r[0];
		}
		$sql2="INSERT INTO `supermarket`.`m_time_sell` (`mts_id`, `mc_id`, `m_time_money`, `m_time_sell`, `m_sell_end`) VALUES (NULL, '$mc_id', '$end_money', '$date', '$end_date')";
		mysqli_query($con, $sql2);
		if (mysqli_affected_rows($con)>0){
			echo "添加成功！！";
			echo "<meta http-equiv=\"Refresh\" content=\"3;url=time_sell.php\">";
		}
	}

}