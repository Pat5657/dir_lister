<head>
<style>
a:visited a:link a:active {
	text-decoration: none;
}

.container {
	background-color:#eaeaea;
	min-width:300px;
	max-width:50%;
	height:97%;
	margin:auto;
	padding:2px 10px 10px;
}

body {
	background-color:#b4bac4;
}

h1 {
	line-height:10px;
	font-family:Bahnschrift;
}

.dir {
	font-family:Bahnschrift Light;
	color:#212121;
}


</style>

</head>
<title>Local Web Dev</title>
<body>

<div class="container">


<?php

// Page title
echo "<h1>LOCAL WEB DEV</h1><hr>";

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

</div>



</body>
