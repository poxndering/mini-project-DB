<?php 
include ('dbconn.php');
$id=$_GET['id'];

if(isset($_POST['edit'])){

    $edit = $_POST['edit_content'];

    $query = "UPDATE post SET content ='$edit'  WHERE post_id='$id'  ";
    mysqli_query($conn,$query) or die (mysqli_error());
    // mysqli_query($conn,"delete from post where post_id='$id'") or die (mysqli_error());
    header ('location: topic.php');
    
}
?>
