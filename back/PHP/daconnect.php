<?php
$con = mysqli_connect("localhost","super","super","supermarket");

if (!$con)
{
	die('Could not connect: ' . mysql_error());
	echo "fail";
}
else {
	mysqli_query($con,"set names utf8");

}


//mysql_close($con);
