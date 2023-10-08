<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $post_id = $_POST["id"];
    $content = $_POST["content"];
    
    $sql = "UPDATE post SET content = '$content' WHERE id = $post_id";

    if ($conn->query($sql) === TRUE) {
        echo "Post updated successfully.";
    } else {
        echo "Error updating post: " . $conn->error;
    }

    header('location: http://localhost/demo_2/demo_1/topic.php');

}

// $sql = "UPDATE post SET title = '$title', content = '$content' WHERE id = $post_id AND user_id = $user_id";
?>
 