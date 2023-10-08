<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	$comment_query = mysqli_query($conn, "SELECT * ,UNIX_TIMESTAMP() - date_posted AS TimeSpent FROM comment LEFT JOIN user on user.user_id = comment.user_id where post_id = '$id'") or die(mysqli_error());
	while ($comment_row = mysqli_fetch_array($comment_query)) {
		$comment_by = $comment_row['firstname'] . " " .  $comment_row['lastname'];
	?>
		<div class="t" style="background-color: #e9e9e9; padding: 10px 15px; border-radius: 15px; margin-bottom: 10px;">
			<strong><?php echo $comment_by; ?>
				-
				<?php
				$days = floor($comment_row['TimeSpent'] / (60 * 60 * 24));
				$remainder = $comment_row['TimeSpent'] % (60 * 60 * 24);
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
			</strong>
			<br>
			<?php
			echo $comment_row['content'];
			?>
		</div>
		<?php
		if (isset($_POST['view'])) {
		?>

		<?php
		}
		?>
	<?php
	}
	?>
</body>

</html>