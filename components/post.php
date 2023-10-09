<?php
include "dbconn.php";

if (!isset($_SESSION['id'])) {
} else {
    if (isset($_POST['post'])) {
        $post_content  = $_POST['post_content'];
        mysqli_query($conn, "insert into post (content,date_created,user_id) values ('$post_content','" . strtotime(date("Y-m-d h:i:sa")) . "','$user_id') ") or die(mysqli_error());
        print_r($_FILES['image']);
        header('location:topic.php');
    }
}

?>
