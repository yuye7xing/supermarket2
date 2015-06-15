<?php
$name_id=$_POST['conmdity_name'];
$producer=$_POST['producer_name'];
$num=$_POST['add_num'];
include 'daconnect.php';
$sql="UPDATE `m_commodity` SET mc_num= mc_num+'$num' WHERE mc_id = '$name_id'";
echo $sql;
$result=mysqli_query($con, $sql);
if(mysqli_affected_rows($con)>0){
	for ($i=0;$i<$num;$i++){
	 	$sql2="INSERT INTO `mc_detail` (`mcd_id`, `mc_id`, `state`) VALUES (NULL, '$name_id', '0');";
        mysqli_query($con, $sql2);
	}
	 echo "<script> if(confirm( '添加成功，继续添加？ '))  location.href='../add_commodity.php';else location.href='../add_commodity.php'; </script>";
}