<?php
$comm_name=$_GET['name'];
$producer_name=$_GET['producer_name'];
$name="生产厂家";
$tab1="退货人";
$tab2="退货产品";
$tab3="生产商家";
$tab4="退货数量";
$tab5="备注信息";
include 'html/blacklist.html';
include 'PHP/daconnect.php';
$type=$_GET['type'];
$page=$_GET['page'];
$ljjl=$_GET['ljjl'];
if ($page=="") {$page=1;};if ($ljjl=="") {$ljjl=0;};
$e_sql="SELECT * FROM `m_suppliers`,`m_commodity`,`m_back` where m_back.mc_id=m_commodity.mc_id and m_suppliers.ms_id=m_commodity.ms_id ";
$result=mysqli_query($con, $e_sql);

while ($r=mysqli_fetch_row($result)){
	echo "<TR>";
	echo "<TD align='center'><input type='checkbox' name=\"test\" id='checkbox2'></TD>";
	echo "<TD align='center'>".$r[18]."</TD>";
	echo "<TD align='center' id=\"commodity_name\" ondblclick=\"doclick_comm(this)\">".$r[6]."</TD>";
	echo "<TD align='center' id=\"producer_name\" ondblclick=\"doclick_supp(this)\">".$r[1]."</TD>";
	
	echo "<TD align='center'>".$r[16]."</TD>";
	echo "<TD align='center'>".$r[17]."</TD>";
	echo "<TD width='160' align='center'><input type=\"button\" style='height:21px; font-size:12px' onClick=\"gettddate()\" value=\"删除\"/> </TD></TR>";
}?>