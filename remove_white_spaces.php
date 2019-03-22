<?php

	$or_text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dignissimos id accusantium nam architecto fugit, quam, hic harum eius voluptate tempore veritatis odit animi fugiat explicabo dolore deleniti mollitia nulla.";

	$replacedText = preg_replace("/ /", '""', $or_text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<p>Initial text:</p>
	<p><i><?= $or_text ?></i></p>
	<p>After removing spaces:</p>
	<p><b><?= $replacedText ?></b></p>
</body>
</html>
