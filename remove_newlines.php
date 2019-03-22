<?php
	header('Content-type: text/plain');
	$or_text = "Lorem ipsum dolor sit amet,\nconsectetur adipisicing elit. Recusandae quae voluptatibus harum quibusdam,\nitaque consectetur voluptate sint non, beatae quidem odit? Sed,\npraesentium mollitia alias ducimus eaque dolor ullam, ratione!\n";

	$replacedText = preg_replace("/[\r\n]/", "", $or_text);
?>



	Initial text:
	
	<?= $or_text ?>
	<?php echo "\n" ?>
	After removing spaces:
	<?= $replacedText ?>
