<?php
	session_start();
	include './php/head.php';
	include './php/navbar.php';
	logincheck();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../assets/stylesheets/main.css"/>
	<?php 
	echo makeHead("Matsumoto Tourism - Activities");
	?>
</head>
<body class="<?php classID() ?>">
		<nav id="topnav">
			<?php 
				makeNavBar();  
			?>
		</nav>
		<main id="content"> <!-- Beginning of page content -->
			<?php
				act_book();
			?>
		</main>
	<footer id="footer"> <!-- Beginning of footer -->
		makeFooter();
	</footer>
</body>
</html>