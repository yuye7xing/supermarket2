<?php
include 'PHP/daconnect.php';
$name=$_GET['name'];
// $name="蒙牛牛奶";
echo ("利用折线图分析商品:   ".$name."    的一周内的销量走势如下：");
echo "<br>";
echo "<br>";
$sql="SELECT *  FROM `m_commodity` WHERE `mc_name` LIKE '$name'";
// echo $sql;
$result=mysqli_query($con, $sql);
if(mysqli_affected_rows($con)==1){
	if($r=mysqli_fetch_row($result)){
		$mc_id=$r[0];
	}
	for ($i=7;$i>0;$i--){
		$cout="SELECT count(*) FROM `mc_detail`,`mc_selle` where mc_detail.mcd_id=mc_selle.mcd_id and mc_detail.mc_id='$mc_id' and DATEDIFF(DATE_FORMAT(now(),'%Y-%m-%d'),mc_selle.date)='$i'";
		$count=mysqli_query($con, $cout);
		if ($r2=mysqli_fetch_row($count)){
			$data[7-$i]=$r2[0];
			 
		}

	}

	$month= array(date('m-d' , strtotime('-1 week')),date('m-d' , strtotime('-6 day')),date('m-d' , strtotime('-5 day')),date('m-d' , strtotime('-4 day')),date('m-d' , strtotime('-3 day')),date('m-d' , strtotime('-2 day')),date('m-d' , strtotime('-1 day')));
	$max = 0;
	for ($i=0;$i<7;$i++){
		$max=$max+$data[$i];          //所有商品销量的累加和
	}
// 	echo $max;
	$im = imagecreate(520,320);     //创建画布
	$green = imagecolorallocate($im,214,235,214); // 设置颜色值
	$black = imagecolorallocate($im,0,0,0);
	$red = imagecolorallocate($im,255,0,0);
	$blue = imagecolorallocate($im,0,0,255);
	imageline($im,10,230,500,230, $blue );     //设置X轴横坐标
	imageline($im,10,5,10,230, $blue );       //设置Y轴纵坐标
	imagestring($im,3,502,222,"date",$black);    //输出字符X
	imagestring($im,3,8,1,"num",$black);        //输出字符Y

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
	$name2=iconv("utf-8","gb2312",$name);
	imagepng($im, $name2.".png");
// 	echo $name.'.png';
	echo "<p align=\"center\"><img src=$name.png width=\"50%\" height=\"350\" ></p>";
	imagedestroy($im);     //释放图像资源
}