<?php
include 'PHP/daconnect.php';
$name=$_GET['name'];
$sql="SELECT * FROM `m_suppliers`,`ms_detail` where m_suppliers.ms_id=ms_detail.ms_id and m_suppliers.ms_name Like '".$name."'";
$result=mysqli_query($con, $sql);
$r=mysqli_fetch_row($result);
if(mysqli_affected_rows($con)>0){
	include 'html/01_detail.html';
}
else {
	echo "暂时不存在详细信息，请点击填写";
}
