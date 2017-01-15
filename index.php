<?php
	header("Expires: Fri, 14 October 1988 10:10:10 GMT");    // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");
	
	header('Location: main/index.php');
?>