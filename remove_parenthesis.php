<?php

	$or_text = "The quick brown [fox].";

	$grepText = [];
	preg_match("/\[.*\]/", $or_text, $grepText);

	
	$par = "";
	if(isset($grepText[0])){
		$par = substr($grepText[0], 1, strlen($grepText[0]) - 2);
	}
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
	<p>Text in parenthesis[]:</p>
	<p><b><?= $par ?></b></p>
</body>
</html>
