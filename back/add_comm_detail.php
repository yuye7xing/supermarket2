<?php
$name=$_GET['name'];
$producer=$_GET['text'];
$type=$_GET['type'];
$num=$_GET['num'];
$money=$_GET['money'];
include 'PHP/daconnect.php';
$sql="SELECT * FROM `m_commodity`,`m_type`,`m_suppliers` where m_commodity.mt_id=m_type.mt_id and m_commodity.ms_id=m_suppliers.ms_id and  m_commodity.mc_name LIKE '$name' and m_suppliers.ms_name LIKE '$producer'";

$result=mysqli_query($con, $sql);
if($r=mysqli_fetch_row($result)){
	$down=$r[8];
	$name_id=$r[0];
	
}
include 'html/add_comm_detail.html';