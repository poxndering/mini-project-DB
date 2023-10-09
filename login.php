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
