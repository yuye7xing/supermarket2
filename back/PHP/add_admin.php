<?php
$name=$_POST['name'];
$pass_word=$_POST['pass'];
$pass=md5($pass_word);
include 'daconnect.php';
$sql="SELECT *  FROM `m_admin` WHERE ad_name LIKE '$name'";
$result=mysqli_query($con, $sql);

if(mysqli_affected_rows($con)>0){
	echo "<script> if(confirm( '当前用户已存在，点击返回管理员体检界面？ '))  location.href='../add_admin.php';else location.href='../admin.php'; </script>";
}else {
	$sql2="INSERT INTO `m_admin` (ad_id, ad_name, ad_pass) VALUES (NULL, '$name', '$pass')";
	mysqli_query($con, $sql2);
	echo "<script> if(confirm( '添加成功，继续添加？ '))  location.href='../add_admin.php';else location.href='../admin.php'; </script>";
}