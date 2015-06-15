<?php
$name=$_COOKIE['name'];
$old=$_POST['old_pass'];
$new=$_POST['new_pass'];
$old_pass=md5($old);
$new_pass=md5($new);
include 'daconnect.php';
$sql="UPDATE `m_admin` SET ad_pass = '$new_pass' WHERE ad_name = '$name' and ad_pass='$old_pass'";
$result=mysqli_query($con, $sql);
if (mysqli_affected_rows($con)>0) {
    echo "成功"	;
}else{
	echo "原始密码错误，重新输入";
	
}