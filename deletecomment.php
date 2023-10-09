<?php 
include ('./dbconn.php');
$id=$_GET['id'];

mysqli_query($conn,"delete from comment where post_id='$id'") or die (mysqli_error());
header ('location: topic.php');

?>