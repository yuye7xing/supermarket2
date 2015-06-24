<?php
include 'PHP/daconnect.php';
$name=$_GET['name'];
// echo ("利用饼图分析商品:   ".$name." 库存与销售比例：");
// echo "<br>";
// echo "<br>";
$sql="SELECT *  FROM `m_commodity` WHERE `mc_name` LIKE '$name'";
$result=mysqli_query($con, $sql);
if(mysqli_affected_rows($con)==1){
	if($r=mysqli_fetch_row($result)){
		$mc_id=$r[0];
	}
$sql0="SELECT count(*)  FROM `mc_detail` WHERE `mc_id` = $mc_id AND `state` = 0";
$sql1="SELECT count(*)  FROM `mc_detail` WHERE `mc_id` = $mc_id AND `state` = 1";
$result0=mysqli_query($con, $sql0);
if($r0=mysqli_fetch_row($result0)){
	$no=$r0[0];
}
$result1=mysqli_query($con, $sql1);
if($r1=mysqli_fetch_row($result1)){
	$yes=$r1[0];
}}




function radians ($degrees)
{
	return($degrees * (pi()/180.0));
}
function circle_point($degrees, $diameter)
{
	$x = cos(radians($degrees)) * ($diameter/2);
	$y = sin(radians($degrees)) * ($diameter/2);

	return (array($x, $y));
}
$ChartDiameter = 200; //图表直径
$ChartFont = 2; //图表字体
$ChartFontHeight = imagefontheight($ChartFont);//图表字体的大小
$ChartData = array( "$no","$yes");//用于生成图表的数据，可通过数据库来取得来确定
$ChartLabel = array("own", "sell"); //数据对应的名称
//确定图形的大小
$ChartWidth = $ChartDiameter + 20;
$ChartHeight = $ChartDiameter + 20 +
(($ChartFontHeight + 2) * count($ChartData));

//确定统计的总数
for($index = 0; $index < count($ChartData); $index++)
{
$ChartTotal += $ChartData[$index];
}

$ChartCenterX = $ChartDiameter/2 + 10;
$ChartCenterY = $ChartDiameter/2 + 10;

//生成空白图形
$image = imagecreate($ChartWidth, $ChartHeight);

//分配颜色
$colorBody = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$colorBorder = imagecolorallocate($image, 0x00, 0x00, 0x00);
$colorText = imagecolorallocate($image, 0x00, 0x00, 0x00);

$colorSlice[] = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$colorSlice[] = imagecolorallocate($image, 0x00, 0xFF, 0x00);

//填充背境
imagefill($image, 0, 0, $colorBody);

/*
** 画每一个扇形
*/
$Degrees = 0;
for($index = 0; $index < count($ChartData); $index++)
{
	$StartDegrees = round($Degrees);
	$Degrees += (($ChartData[$index]/$ChartTotal)*360);
	$EndDegrees = round($Degrees);

	$CurrentColor = $colorSlice[$index%(count($colorSlice))];

	//画图F
	imagearc($image,$ChartCenterX,$ChartCenterY,$ChartDiameter,
	$ChartDiameter,$StartDegrees,$EndDegrees, $CurrentColor);

	//画直线
	list($ArcX, $ArcY) = circle_point($StartDegrees, $ChartDiameter);
	imageline($image,$ChartCenterX,$ChartCenterY,floor($ChartCenterX + $ArcX),
	floor($ChartCenterY + $ArcY),$CurrentColor);
	//画直线
	list($ArcX, $ArcY) = circle_point($EndDegrees, $ChartDiameter);
	imageline($image,$ChartCenterX,$ChartCenterY,ceil($ChartCenterX + $ArcX),
	ceil($ChartCenterY + $ArcY),$CurrentColor);

	//填充扇形
	$MidPoint = round((($EndDegrees - $StartDegrees)/2) + $StartDegrees);
	list($ArcX, $ArcY) = circle_point($MidPoint, $ChartDiameter/2);
	imagefilltoborder($image,floor($ChartCenterX + $ArcX),floor($ChartCenterY + $ArcY),
	$CurrentColor,$CurrentColor);
	}

	//画边框
	imagearc($image,
			$ChartCenterX,
			$ChartCenterY,
			$ChartDiameter,
			$ChartDiameter,
			0,
			180,
			$colorBorder);

	imagearc($image,
	$ChartCenterX,
	$ChartCenterY,
	$ChartDiameter,
	$ChartDiameter,
	180,
	360,
	$colorBorder);

	imagearc($image,
	$ChartCenterX,
	$ChartCenterY,
	$ChartDiameter+7,
	$ChartDiameter+7,
	0,
	180,
	$colorBorder);

	imagearc($image,
			$ChartCenterX,
			$ChartCenterY,
	$ChartDiameter+7,
	$ChartDiameter+7,
	180,
	360,
	$colorBorder);

	imagefilltoborder($image,
			floor($ChartCenterX + ($ChartDiameter/2) + 2),
	$ChartCenterY,
	$colorBorder,
	$colorBorder);

	//画图例
	for($index = 0; $index < count($ChartData); $index++)
	{
		$CurrentColor = $colorSlice[$index%(count($colorSlice))];
		$LineY = $ChartDiameter + 20 + ($index*($ChartFontHeight+2));

		//draw color box
		imagerectangle($image,
		10,
		$LineY,
		10 + $ChartFontHeight,
		$LineY+$ChartFontHeight,
		$colorBorder);

		imagefilltoborder($image,
				12,
				$LineY + 2,
		$colorBorder,
		$CurrentColor);

		//画标签
		imagestring($image,
		$ChartFont,
		20 + $ChartFontHeight,
		$LineY,
		"$ChartLabel[$index]: $ChartData[$index]",
		$colorText);
		}

		//到此脚本 已经生了一幅图像的，现在需要的是把它发到浏览器上，重要的一点是要将标头发给浏览器，让它知道是一个GIF文件。不然的话你只能看到一堆奇怪的乱码

		header("Content-type: image/gif");
		//输出生成的图片
		imagegif($image);
		?>