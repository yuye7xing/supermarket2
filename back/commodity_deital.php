<?php
include 'PHP/daconnect.php';
$comm_name=$_GET['comm_name'];
// $comm_name="蒙牛牛奶";
$sql="SELECT * FROM `m_commodity`,`m_type`,`m_suppliers` where m_commodity.mt_id=m_type.mt_id and m_commodity.ms_id=m_suppliers.ms_id and m_commodity.mc_name LIKE '$comm_name'";
$result=mysqli_query($con, $sql);
if($r=mysqli_fetch_row($result)){
include 'html/comm_detail.html';
echo ("利用折线图分析商品:   ".$comm_name."    的一周内的销量走势如下：");
echo "<br>";
echo "<br>";
$data = array("10","12","14","13","13","12","11");
$month= array("1","2","March","April","May","June","July");
$max = 0;
for ($i=0;$i<12;$i++){
	$max=$max+$data[$i];          //所有商品销量的累加和
}
$im = imagecreate(520,300);     //创建画布
$green = imagecolorallocate($im,214,235,214); // 设置颜色值
$black = imagecolorallocate($im,0,0,0);
$red = imagecolorallocate($im,255,0,0);
$blue = imagecolorallocate($im,0,0,255);
imageline($im,10,230,500,230, $blue );     //设置X轴横坐标
imageline($im,10,5,10,230, $blue );       //设置Y轴纵坐标
imagestring($im,3,502,222,"X",$black);    //输出字符X
imagestring($im,3,8,1,"Y",$black);        //输出字符Y
 
$l=190;
$k1=10;
$k2=490;
for($j=0;$j<7;$j++){
	imageline($im,$k1,$l,$k2,$l,$black);      //设置X轴网格线横坐标
	$l=$l-40;
}

$f=50;
$z1=10;
$z2=228;
for($j=0;$j<7;$j++){
	imageline($im,$f,$z1,$f,$z2,$black);     //设置Y轴网格线纵坐标
	$f=$f+40;
}

$x = 20;
$y = 230;
for ($i=1;$i<7;$i++){
	$y_lt = 230-(($data[$i-1]/$max)* 1000);      //设置商品价格所占千分比
	$y_ht = 230-(($data[$i]/$max)* 1000);        //设置商品价格所占千分比
	imageline($im,$x*($i*2-1)+10,$y_lt,$x*(($i+1)*2-1)+10,$y_ht,$red);     //绘制折线图
}
	
for ($i=1;$i<8;$i++){
	imagestring( $im,2,$x*($i-1)*2+20,$y+11,$month[$i-1],$black);    //输出月份的值
	imagestring( $im,2,$x*($i-1)*2+20,$y+25,$data[$i-1],$black);    //输出商品价格的值
}
imagepng($im, "b.png");
echo "<p style=\"text-align:center;background:#00FF33\"><img src='b.png' width=\"50%\" height=\"250\" ></p>";
imagedestroy($im);     //释放图像资源
}