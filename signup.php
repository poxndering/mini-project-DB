<?php
	include('dbconn.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$sql = "SELECT * FROM user WHERE username='$username'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	?>
		<script>
			alert('มีชื่อผู้ใช้แล้ว');
			window.location = 'login-register.php';
		</script>
		<?php
	} else {
		$sql = mysqli_query($conn, "insert into user (username, password, firstname, lastname) values ('$username', '$password', '$firstname', '$lastname')");
		if ($sql === TRUE) {
		?>
			<script>
				alert('สมัครสมาชิกสำเร็จ');
				window.location = 'login-register.php';
			</script>
	<?php
		} else {
			echo "เกิดข้อผิดพลาดในการสมัครสมาชิก: " . $conn->error;
		}
	}
	?>