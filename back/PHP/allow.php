<?php
 $name=$_GET['name'];
 $num=$_GET['num'];
 $id=$_GET['id'];
 include 'daconnect.php';
 $query="SELECT *  FROM `m_commodity` WHERE `mc_name` LIKE '$name'";
 $re=mysqli_query($con, $query);
 if($re2=mysqli_fetch_row($re)){
 	$mc_id=$re2[0];
 }
 
 echo $num;
 for ($i = 0; $i < $num; $i++) {
 	$sql="UPDATE `supermarket`.`mc_detail` SET `state` = '1' WHERE `mc_id` = $mc_id AND `state` = 0 limit $num";
 	mysqli_query($con, $sql);
 }
 
 $delete="DELETE FROM `m_order` WHERE `m_order`.`mo_id` = $id";
 $result=mysqli_query($con, $delete);
 if($result){
 	echo "成功";
 }else {
 	echo "失败";
 }