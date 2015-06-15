<?php
$name=$_GET['name'];
include 'daconnect.php';
$sql="SELECT *  FROM `m_commodity` WHERE `mc_name` LIKE '$name'";
$result=mysqli_query($con, $sql);
if(mysqli_affected_rows($con)==1){
	if($r=mysqli_fetch_row($result)){
		$mc_id=$r[0];
	}
	$sql2="DELETE FROM `supermarket`.`m_time_sell` WHERE `m_time_sell`.`mts_id` = $mc_id";
	mysqli_query($con, $sql2);
	if (mysqli_affected_rows($con)>0){
		echo "删除成功！！";
		echo "<meta http-equiv=\"Refresh\" content=\"3;url=../time_sell.php\">";
	}
}