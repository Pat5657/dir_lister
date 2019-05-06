<head>
	<!-- Title -->
	<title>Local Web Dev</title>

	<!-- Resource links -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<main>
		<header>
			<h1>LOCAL WEB DEV</h1>
			<hr>
		</header>
		
		<!-- Main script -->
		<?php
			//search current dir
			foreach (glob("*") as $filename) {
				if ($filename != "index.php") {
						//echo each file name in the dir and hyperlink it
						echo "<a class='dir' href=$filename>$filename</a> <br>";
				} else {
					continue;
				}
			}
		?>
		<!-- Main script -->
	<main>
</body>
