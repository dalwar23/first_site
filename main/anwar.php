<?php
	header("Expires: Thu, 17 May 2001 10:17:17 GMT");    // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	session_start();

	if (!isset($_SESSION['SESSION'])) require ( "session_init.php");
	//echo $_SESSION['LOGGEDIN'];
	if ($_SESSION['LOGGEDIN'] == false) 
	{ header("Location: index.php?flg=passblack");	exit;}
	if($_SESSION['authentication1']!= 1)
	{ header("Location:averify.php?flg=orange"); exit;}
	//page id and hits
	$page_id = 6; //page id
	require("hits.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>pursuit of happyness</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">

	<div id="header">
		<div id="menu">
            <?php include("menu.php"); ?>
		</div>
		<!-- end #menu -->
	</div>
	<!-- end #header -->
	<div id="logo">
		<h1><a href="#">pursuit of happyness</a></h1> 
		<p> 
it's never too late 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>
	</div>
	<hr />
	<!-- end #logo -->
<!-- end #header-wrapper -->

<div id="page">
	<div id="pcontent">
		<div class="post">
			<h2 class="title">anwar ! let it be quiet and calm again.....</h2>
			<p class="date"><?php echo date("d.m.Y");?></p> 
			<div class="entry">
				<!-- file for the rading -->
			<?php
                        $file=@fopen("input_files/05.txt","r") or exit("Unable to open the specified file");
                        
                        while(!feof($file))
                        {
                            if($row=fgets($file));
                            {
                                echo $row ;
                            }
                        }
                        fclose($file);
                        ?>
      			</div>
                <h2 align="center"> >> <a href="averify.php?flg=offwhite">Signout</a> << </h2>
		</div>

	</div>
	<!-- end #content -->

	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
</div>

<div id="footer">
	<p><a href="home.php">Home</a> || <a href="about.php">About Author</a> || <a href="privacy_policy.php">Privacy policy </a></p>
	<p>&copy; arif 2010. All rights reserved. <a href="http://www.mohona.org">www.mohona.org</a> &reg;</p>
</div>
<!-- end #footer -->
</body>
</html>