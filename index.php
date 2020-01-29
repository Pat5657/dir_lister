<?php 

$blacklist = ['.', '..', 'dir_lister', 'index.php'];

?>

<head>
	<!-- Title -->
	<title>Local Web Dev</title>

	<!-- Resource links -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<main>
		<!-- Header -->
		<header>
			<h1>LOCAL WEB DEV</h1>
			<hr>
		</header>
		
		<!-- Main script -->
		<?php
			// Search current dir
			foreach (scandir("../") as $filename) {
				if (!in_array($filename, $blacklist)) {
						// echo each file name in the dir and hyperlink it
						echo "<a class='dir' href=$filename>$filename</a> <br>";
				}
			}
		?>
	</main>
</body>
