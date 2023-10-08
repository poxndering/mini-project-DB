<?php
include "dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['id'])) {
    } else {
        if (isset($_POST['post'])) {
            $post_content  = $_POST['post_content'];
            mysqli_query($conn, "insert into post (content,date_created,user_id) values ('$post_content','" . strtotime(date("Y-m-d h:i:sa")) . "','$user_id') ") or die(mysqli_error());
            print_r($_FILES['image']);
            echo "5555";
            header('location:topic.php');
        }
    }
    ?>
</body>

</html>