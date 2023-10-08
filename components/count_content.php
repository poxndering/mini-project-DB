<?php

include "./dbconn.php";

$sql1 = "SELECT * FROM post ORDER BY content DESC";
$sql2 = "SELECT * FROM comment ORDER BY content DESC";

$sql3 = "SELECT * FROM post where user_id = '$user_id' ORDER BY content DESC";
$sql4 = "SELECT * FROM comment where user_id = '$user_id' ORDER BY content DESC";

$result1 = mysqli_query($conn,$sql1);
$countpost = $result1->num_rows;

$result2 = mysqli_query($conn,$sql2);
$countcomment = $result2->num_rows;

$result3 = mysqli_query($conn,$sql3);
$countpost_user = $result3->num_rows;

$result4 = mysqli_query($conn,$sql4);
$countcomment_user = $result4->num_rows;

?>