<?php
session_start(); 
include 'daconnect.php';
if($_POST['Submit']=="提交"){
	$date=$_POST['date'];
	$e_path = 'upfiles/'. $_FILES['images']['name'];
	$address=$_POST['producer_add'];
	$producer_name=$_POST['producer_name'];
	$conmdity_name =$_POST['conmdity_name'];
	$type=$_POST['select2'];
	$money=$_POST['money'];
	$down=$_POST['down'];
	$filesize=$_FILES['images']['size'];
	if($filesize>1000000){echo "<script> alert('太大!!'); history.back();</script>";}else{
		$path = '../upfiles/'. $_FILES['images']['name'];
		if (move_uploaded_file($_FILES['images']['tmp_name'],$path)) {
			$sql="SELECT *  FROM `m_suppliers` WHERE `ms_name` LIKE '$producer_name'";
			$result=mysqli_query($con, $sql);
			if(mysqli_affected_rows($con)>0){
				if ($r=mysqli_fetch_row($result))
				$ms_id=$r[0];
			}
			else {
				$sql2="insert into `m_suppliers`(ms_id,ms_name,ms_add) values('','$producer_name','$address')";
				mysqli_query($con, $sql2);
				$ms_id = mysqli_insert_id($con);
			}

		}
	//获取种类ID	
		$sql3="SELECT *  FROM `m_type` WHERE `mt_name` LIKE '$type'";
		$result2=mysqli_query($con, $sql3);
		if($r2=mysqli_fetch_row($result2)){
			$mt_id=$r2[0];
		}
		
	//插入商品	
	$end_sql="INSERT INTO `m_commodity` (`mc_id`, `mc_name`, `mc_image`, `mt_id`, `ms_id`, `mc_money`, `mc_uptime`,`mc_downtime`) VALUES (NULL, '$conmdity_name', '$e_path', '$mt_id', '$ms_id', '$money', '$date','$down')";
	$result1=mysqli_query($con,$end_sql);
	if($result1==true){
		echo "上传成功";
		echo "<meta http-equiv=\"Refresh\" content=\"3;url=../add_commodity.php\">";
	}else{echo "失败";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=../index.php\">";}
	}
	
}