<?php
    
    include "dbconn.php";
    
    if (!isset($_SESSION['id'])) {
    } else {
        if (isset($_POST['comment'])) {
            $comment_content = $_POST['comment_content'];
            $post_id = $_POST['id'];
            mysqli_query($conn, "insert into comment (content,date_posted,user_id,post_id) values ('$comment_content','" . strtotime(date("Y-m-d h:i:sa")) . "','$user_id','$post_id')") or die(mysqli_error());
            header('location:topic.php');
        }
    }        
?>