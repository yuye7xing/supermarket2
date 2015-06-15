<?php
$name=$_COOKIE['name'];
if($name=="admin"){
	include 'html/add_admin.html';
}else {
	echo "<script>alert(\"当前用户无改权限\");</script>";
			} 