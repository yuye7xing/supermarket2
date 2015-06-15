<?php
include 'PHP/daconnect.php';
$name=$_POST['email'];
 $pass=$_POST['password'];
//获取用户名和密码
$pass_mad5=md5($pass);
$sql="SELECT *  FROM `m_admin` WHERE `ad_name` LIKE '".$name."' AND `ad_pass` LIKE '".$pass_mad5."'";
mysqli_query($con, $sql);
if(mysqli_affected_rows($con)>0){
	setcookie('name',$name);
 	header("Location: index.php");
// 	exit();
//echo $_COOKIE['name'];
}
else {
	 echo "<script>alert('fail，login,too');
	 		location.href='index.php'</script>";
	 exit();
}


//header("Location: http://www.baidu.com");
//exit();