<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="/styles.css"/>
		<title>Jo's Jobs - <?=$title;?></title>
	</head>
	<body>
	<header>
		<?php require 'header.html.php'; ?>
	</header>

	<nav>
		<?=$nav;?>
	</nav>
	<?php
$files = [];
foreach (new DirectoryIterator('../public/images/banners') as $file) {
	if ($file->isDot()) {
		continue;
	}

	if (!strpos($file->getFileName(), '.jpg')) {
		continue;
	}

	$files[] = $file->getFileName();
}

$filename = $files[rand(0,count($files)-1)];
?>
	<img src="/images/banners/<?= $filename ?>"/>
	
	<main class="sidebar">
		<?=$output;?>
	</main>

	<footer>
		<?php require 'footer.html.php'; ?>
	</footer>
</body>
</html>