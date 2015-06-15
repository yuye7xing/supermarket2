<?php
include 'PHP/daconnect.php';
$sql="INSERT INTO `return` (r_id, conmdity_name,type, producer_name, producer_add, money, return_money, time) VALUES (NULL, '筷子2', '日常百货','筷子集团集团', '济南高新区', '10', '5', '2015-6-25')";
mysqli_query($con, $sql);