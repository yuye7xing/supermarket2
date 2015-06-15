<?php
include 'PHP/daconnect.php';
$sql="SELECT * FROM `m_admin`";
echo "<h3>超级管理员：</h3>";
echo "<h4>admin：</h4>"."</br>";
echo "<h3>普通管理员：</h3> </br>";
echo "<table width=\"100%\"  border=\"1\" >";
echo "<tr><td align='center'>用户名</td><td align='center'>更新日期</td><td align='center'>操作</td></tr>";
$result=mysqli_query($con, $sql);
while ($r=mysqli_fetch_row($result)){
	echo "<TR>";
	echo "<TD align='center'>".$r[1]."</TD>";
	echo "<TD align='center'>".$r[3]."</TD>";
	echo "<TD width='160' align='center'><input type=\"button\" style='height:21px; font-size:12px' onClick=\"gettddate()\" value=\"删除\"/> </TD></TR>";
}
