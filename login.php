<?php
		include('./dbconn.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");
		$count = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);
		if ($count > 0){
		$_SESSION['id']=$row['user_id'];
		$_SESSION['username'] = $username;
		header("location: home.php");
		}else{ 
			?>
		<script>
			alert('ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง');
			window.location='login-register.php';
		</script>
		<?php
		}	
		?>
<!-- <?php


if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the entered password for comparison with the stored hash
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query the database to fetch user information
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verify the hashed password
        if (password_verify($password, $row["password"])) {
            // Successful login, redirect the user to a welcome page
            header("Location: home.php");
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password.";
        }
    } else {
        // User not found
        echo "User not found.";
    }
}
?> -->