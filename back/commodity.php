<?php
include 'PHP/daconnect.php';
$sql="SELECT * FROM `m_commodity`,`m_type`,`m_suppliers` where m_commodity.mt_id=m_type.mt_id and m_commodity.ms_id=m_suppliers.ms_id";
$result=mysqli_query($con, $sql);
 include 'html/table.html';
while ($r=mysqli_fetch_row($result)){
	echo "<TR>";
	echo "<TD align='center'><input type='checkbox' name=\"test\" id='checkbox2'></TD>";
	echo "<TD align='center' id=name>".$r[1]."</TD>";
	echo "<TD align='center'>".$r[9]."</TD>";
	echo "<TD align='center'>".$r[11]."</TD>";
	echo "<TD align='center'>".$r[6]."</TD>";
	echo "<TD align='center'>"."￥".$r[4]."</TD>";
    echo "<TD width='160' align='center'><input type=\"button\" style='height:21px; font-size:12px' onClick=\"gettddate()\" value=\"查看\"/> </TD></TR>";
}
