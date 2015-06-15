<?php
$name="生产商家";
$tab1="商品名称";
$tab2="订购数量";
$tab3="仓库储量";
$tab4="运送地点";
$tab5="订购时间";
include 'html/blacklist.html';
include 'PHP/daconnect.php';
$commodity_name=$_GET['commodity_name'];
$producer_name=$_GET['producer_name'];
$type=$_GET['type'];
$page=$_GET['page'];
$ljjl=$_GET['ljjl'];
if ($page=="") {$page=1;};if ($ljjl=="") {$ljjl=0;};
$e_sql="SELECT * FROM `m_commodity`,`m_order` where m_commodity.mc_id=m_order.mc_id";
//大于当前日期小于10天内的
$sql=$e_sql." and m_commodity.mc_name LIKE '%".$commodity_name."%' and DATEDIFF (DATE_FORMAT(NOW(),'%Y-%m-%d'),m_order.mo_date)<0 and DATEDIFF (DATE_FORMAT(NOW(),'%Y-%m-%d'),m_order.mo_date)>-10" ;
$page_size=10;
$sql2=str_replace("*", "count(*)", $sql);
$result2=mysqli_query($con,$sql2);
$r2=mysqli_fetch_row($result2);
$message_count=$r2[0];
$page_count=ceil($message_count/$page_size);
$offset=($page-1)*$page_size;
$sql3=$sql." limit ".$offset."," .$page_size;
$result=mysqli_query($con, $sql3);


while ($r=mysqli_fetch_row($result)){
	$mc_id=$r[0];
	$query="SELECT count(*)  FROM `mc_detail` WHERE `mc_id` = $mc_id AND `state` = 0";
	$re=mysqli_query($con, $query);
	if($re2=mysqli_fetch_row($re)){
		$num0=$re2[0];
	}

	echo "<TR>";
	echo "<TD align='center'>$r[9]</TD>";
	echo "<TD align='center' id=\"commodity_name\" ondblclick=\"doclick_comm(this)\">".$r[1]."</TD>";
	echo "<TD align='center' >".$r[11]."</TD>";
	echo "<TD align='center'>".$num0."</TD>";
	if($r[11]<10){
		$add="上门自提";
	}else {
		$add=$r[13];
	}
	echo "<TD align='center'>".$add."</TD>";
	echo "<TD align='center'>".$r[12]."</TD>";
	echo "<TD width='160' align='center'>
			<input type=\"button\" style='height:21px; font-size:12px' onClick=\"allow()\" value=\"通过\"/> 
			<input type=\"button\" style='height:21px; font-size:12px' onClick=\"refuse()\" value=\"拒绝\"/></TD></TR>";
	}?>
	<table width="500" border="1" cellpadding="0" cellspacing="0" bgcolor="#CEFFCE" align="right" >
	<tr>
	                <td width="45%" height="22" align="center" ><span class="STYLE2">&nbsp;&nbsp;页次：<?php echo $page;?>
	                /<?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </span></td>
	                <td width="45%" align="center" ><span class="STYLE2"> 分页： 
	                <?php
	       	        $xsoudh="id=$id";
					$next=$ljjl*10;
					$n=$ljjl-1;
					$m=$ljjl+1;	
	                $prev_page=$page-10;						
						if ($ljjl==0){
	                    echo "<img src=\"images/table/02.jpg\" width=\"8\" height=\"9\" title=\"首页\">";					
						}else
						{
	                     echo "<a href='$PATH_INFO?vv=0&ljjl=0&page=1&$xsoudh'><img src=\"images/table/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"首页\"></a>&nbsp;";
						 $ccc=$vv-10;
	                     echo "<a href='$PATH_INFO?vv=$ccc&ljjl=$n&page=$prev_page&$xsoudh'><img src=\"images/table/01.jpg\" width=\"8\" height=\"9\" title=\"上十页\"></a>";
						}?>
	                <?php	
	 		        for ($j=1;$j<=$page_count;$j++) {
					       $pnext=$next+$j;
					       if ($mm==10){
						       break;
						   }
							if ($mm>$page_count){
								break;
							}
							if ($page_count-$vv<10){
		  						if ($mm>=$page_count-$vv){
									break;
								}									
							}
							?>
	                <?php
	                        echo "<a href='$PATH_INFO?vv=$vv&ljjl=$ljjl&page=$pnext&$xsoudh'> $pnext</a>";											
	              	        $mm=$mm+1;						
		     	     }
					 ?>			    
	                </span></td>
					 <td width="10%" align="center" >
	                   <span class="STYLE2">
	                   <?php
					$vv=$vv+$mm;
					       if ($page_count-$vv<=0){
		                       echo "<img src=\"images/table/03.jpg\" width=\"8\" height=\"9\" title=\"尾页\">";					
						   }else{
		                       echo "<a href='$PATH_INFO?vv=$vv&ljjl=$m&page=$pnext&$xsoudh'><img src=\"images/table/03.jpg\" width=\"8\" height=\"9\" title=\"下十页\"></a>";														
						   }
	                if ($message_count==0){
						     echo "没有记录!";
					}
	?>
	                  </span> </td>
	              </tr>
	</table>
	
	</body>
	</html>


