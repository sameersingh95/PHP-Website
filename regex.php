<?php
	$subject = "abcdef is fhgdhggdfdhggdfg ";
	$pattern = '/(hg)+d/';
	preg_match_all($pattern, $subject, $matches, 

	PREG_OFFSET_CAPTURE,3);
	print_r($matches);
	?>
