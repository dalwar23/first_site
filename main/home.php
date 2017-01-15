<?php
	header("Expires: Thu, 17 May 2001 10:17:17 GMT");    // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	session_start();

	if (!isset($_SESSION['SESSION'])) require ( "session_init.php");
	//echo $_SESSION['LOGGEDIN'];
	if ($_SESSION['LOGGEDIN'] == false) {
			header("Location: index.php?flg=black");
			exit;
	}
	$_SESSION['authentication'] = 0 ;
	$_SESSION['authentication1'] = 0 ;
	
	//setting the page id and counting the hits
	$page_id = 2; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>pursuit of happyness</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-script-type" content="text/javascript">
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
	<div id="content">
		<div class="post">
			<h2 class="title">welcome to pursuit of happyness</h2>
			<p class="date"><?php echo date("d.m.Y");?></p>
			<div class="entry">
					<!-- file no:01-->
			<?php
                        $file=@fopen("input_files/01.txt","r") or exit("Unable to open the specified file");
                        
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
		</div>
		<div class="post">
			<h2 class="title">MOHONA!</h2>
			<p class="date"><?php echo date("d.m.Y");?></p>
			<div class="entry">
					<!-- file no:02 -->
			<?php
                        $file=@fopen("input_files/02.txt","r") or exit("Unable to open the specified file");
                        
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
		</div>
		<div class="post">
			<h2 class="title">ANWAR!</h2>
			<p class="date"><?php echo date("d.m.Y");?></p>
			<div class="entry">
				<!-- file no:03-->
			<?php
                        $file=@fopen("input_files/03.txt","r") or exit("Unable to open the specified file");
                        
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
		</div>
		<div class="post">
			<h2 class="title">MAHIN!</h2>
			<p class="date"><?php echo date("d.m.Y");?></p>
			<div class="entry">
				<!-- file no:04-->
			<?php
                        $file=@fopen("input_files/04.txt","r") or exit("Unable to open the specified file");
                        
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
		</div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<ul>
			<li>
				<h2>SITE SUMMARY</h2>
				<ul>
					<li>TOTAL WEB HITS :</li>
					<li><b><?php include("hits.php"); ?></b></li>
					<li>TOTAL PAGE HITS :</li>
					<li><?php include("page_hits.php");?></li>
					<li>TOTAL USERS :</li>
					<li><?php include("users.php");?></li>
			        </ul>
		  </li>
			<li>
				<h2>YOUR INFO</h2>
				<ul>
					<li>YOUR IP ADDRESS :</li>
					<li><?php include("ip.php")?></li>
					<li>TIME :</li>
					<li><script type="text/javascript" src="digitalclock.js"></script></li>
					<li>YOU ARE AT : </li>
					<li><?php echo $_SERVER['PHP_SELF']; ?></li>
					<li>PRESENT HOST : </li>
					<li><?php echo $_SERVER['HTTP_HOST']; ?></li>
			  </ul>
		  </li>

		</ul>
	</div>
	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
</div>

<div id="footer">
	<p><a href="#">Home</a> || <a href="about.php">About Author</a> || <a href="privacy_policy.php">Privacy policy </a></p>
	<p>&copy; arif 2010. All rights reserved. <a href="http://www.mohona.org">www.mohona.org</a> &reg;</p>
</div>
<!-- end #footer -->
</body>
</html>