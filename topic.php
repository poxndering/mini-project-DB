<?php include('dbconn.php'); ?>
<?php include('./components/session.php'); ?>
<?php include('./components/post.php'); ?>
<?php include('./components/comment.php'); ?>
<?php include "./components/count_content.php"; ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>POST AND COMMENT SYSTEM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #d9d9d9;
            background-image: url("./styles//image//image-bg-topic.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
            padding: 0 15px;
        }
    </style>
</head>

<body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="background-color: #000;">
        <div class="container">
            <a class="navbar-brand fs-4" href="#">ECP3N</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="./home.php #recommend">Recommend</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="./topic.php">Topic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="./home.php #contact">Contact</a>
                    </li>
                    <li class="nav-item" style="margin-left: 55px">
                        <a class="nav-link text-white fs-5" href="login-register.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container " style="margin-top: 100px; width: 1000px;">
        <div style="display: flex; justify-content: space-between;">
            <?php
            if (isset($_SESSION['id'])) { ?>
                <a href="./logout.php" style="">
                    <button type="button" class="btn btn-secondary">
                        <?php echo $member_row['firstname'] . " " . $member_row['lastname']; ?> - Log Out
                    </button>
                </a>

            <?php
            }
            ?>
            <div>
                <button type="button" class="btn btn-success px-4">
                    User Post: <?php echo $countpost_user; ?>
                </button>
                <button type="button" class="btn btn-success px-4">
                    User Comment: <?php echo $countcomment_user; ?>
                </button>
                <button type="button" class="btn btn-info px-5">
                    Post All: <?php echo $countpost; ?>
                </button>
                <button type="button" class="btn btn-info px-5">
                    Comment All: <?php echo $countcomment; ?>
                </button>
            </div>
        </div>

        <section class="container p-4 bg-white rounded-4 mb-3 mt-4" style="background-color: #d9d9d9;">
            <div>
                <img src="./styles/image/avatar.jpg" class="rounded-circle" alt="User Profile Picture" style="width: 50px;">
                <div class="">
                    <strong>
                    </strong>

                </div>
            </div>
            <form method="post">
                <label for="inputEmail4" class="form-label mt-4">Content:</label>
                <div class="form-floating ">
                    <textarea name="post_content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Content</label>
                    <button name="post" class="btn btn-success mt-3 mb-3">Post</button>
                </div>
            </form>
        </section>
        <?php
        $query = mysqli_query($conn, "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC") or die(mysqli_error());
        while ($post_row = mysqli_fetch_array($query)) {
            $id = $post_row['post_id'];
            $posted_by = $post_row['firstname'] . " " . $post_row['lastname'];
            $content = $post_row['content'];
        ?>
            <section class="container p-4 bg-white rounded-4 mb-3">
                <div style="float: right; display: flex;">

                    <?php
                    if (isset($_SESSION['id'])) {
                    ?>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-right: 5px;">
                            Edit
                        </button>
                        <a style="text-decoration:none; float:right;" href="deletepost.php<?php echo '?id=' . $id; ?>">
                            <button type="button" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content p-4">
                                    <form method="post" action="./edit-post.php <?php echo '?id=' . $id; ?>">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float: right;"></button>
                                        <label for="inputEmail4" class="form-label mt-4"> Edit content:</label>
                                        <div class="form-floating">
                                            <input type="hidden" name="update_id" id="update_id" value="">
                                            <textarea name="edit_content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Content</label>
                                            <button name="edit" class="btn btn-success mt-3 mb-3">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    ?>
                </div>

                <!-- Include Bootstrap JS and jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

                <div class="rounded-circle ">
                    <img src="./styles/image/avatar.jpg" class="rounded-circle" alt="User Profile Picture" style="width: 50px;">
                    <div class="user-info">
                        <strong>
                            <?php echo $posted_by; ?>
                        </strong>
                        <p>
                            <?php
                            $days = floor($post_row['TimeSpent'] / (60 * 60 * 24));
                            $remainder = $post_row['TimeSpent'] % (60 * 60 * 24);
                            $hours = floor($remainder / (60 * 60));
                            $remainder = $remainder % (60 * 60);
                            $minutes = floor($remainder / 60);
                            $seconds = $remainder % 60;
                            if ($days > 0)
                                echo date('F d, Y - H:i:sa', $post_row['date_created']);
                            elseif ($days == 0 && $hours == 0 && $minutes == 0)
                                echo "A few seconds ago";
                            elseif ($days == 0 && $hours == 0)
                                echo $minutes . ' minutes ago';
                            ?>
                        </p>
                    </div>
                </div>
                <p class="fs-5">
                    <?php
                    echo $content;
                    ?>
                </p>
                <form method="post">
                    <?php
                    if (isset($_SESSION['id'])) {
                    ?>
                        <label for="inputEmail4" class="form-label mt-4">Comment:</label>
                        <div class="form-floating">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <textarea name="comment_content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comment</label>
                            <button name="comment" type="submit" class="btn btn-success mt-3 mb-3">Comment</button>
                            <a class="mt-3" style="text-decoration:none; float:right;" href="deletecomment.php<?php echo '?id=' . $id; ?>">
                                <button type="button" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="dropdown">
                        <?php
                        include "./components/view_comment.php";
                        ?>
                    </div>
                </form>
            </section>
        <?php
        }
        ?>
</body>

<?php
// include('footer.php'); 
?>

</html>