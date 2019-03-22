<?php

	$or_text = "$123.34.00A";

	$replacedText = preg_replace("/[^0-9\.\,]/", "", $or_text);
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
