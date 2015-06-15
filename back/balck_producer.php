<?php
include 'PHP/daconnect.php';
$name=$_GET['name'];
$sql="SELECT * FROM `m_suppliers`,`ms_detail` where m_suppliers.ms_id=ms_detail.ms_id and m_suppliers.ms_name Like '".$name."'";
$result=mysqli_query($con, $sql);
$r=mysqli_fetch_row($result);
if(mysqli_affected_rows($con)>0){
	
	
// 	$sql2="SELECT * FROM `m_blacklist`,`m_back_list`where m_blacklist.mb_id=m_back_list.mb_id and m_blacklist.mb_name LIKE '$name'";
// 	$result2=mysqli_query($con, $sql2);
// 	echo "<tr><h2 align=\"center\">拉黑详细信息：</h2></tr>";
// 	while ($r2=mysqli_fetch_row($result2)){
// 		echo "<tr>";
// 		echo $name."在".$r2[5]."被".$r2[11]."投诉，备注信息是：".$r2[10]."按照规定扣1分"."</br>";
// 		echo "</tr>";
// 	}
	include 'html/02_detail.html';
}
else {
	echo "暂时不存在详细信息，请点击填写";
}
