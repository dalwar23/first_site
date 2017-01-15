<?php
	header("Expires: Thu, 17 May 2001 10:17:17 GMT");    // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	session_start();

	if (!isset($_SESSION['SESSION'])) require ( "session_init.php");
	//echo $_SESSION['LOGGEDIN'];
	if ($_SESSION['LOGGEDIN'] == false) 
	{ header("Location: index.php?flg=black");	exit;}
	
	// page id and hits
	$page_id = 8; //page id
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
		<!-- here goes the table -->

        <table align="center" border="0px" width="50%" cellspacing="0px" cellpadding="0px">
             <th align="center" colspan="2" style=" font:Tahoma, Geneva, sans-serif; font-size:14px; font-weight:bold; color:black;">
                <?php echo $error ?>
            </th>
        	<tr>
            	<td>
                	<table align="center" width="100%" border="0px" >
              			 	<tr>
            					<td>
            						<div align="center">
            						<iframe width="940" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=sylhet+bangladesh&amp;sll=37.0625,-95.677068&amp;sspn=35.768112,78.662109&amp;ie=UTF8&amp;hq=&amp;hnear=Sylhet,+Sylhet+Division,+Bangladesh&amp;ll=24.897648,91.871452&amp;spn=0.117403,0.32238&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=sylhet+bangladesh&amp;sll=37.0625,-95.677068&amp;sspn=35.768112,78.662109&amp;ie=UTF8&amp;hq=&amp;hnear=Sylhet,+Sylhet+Division,+Bangladesh&amp;ll=24.897648,91.871452&amp;spn=0.117403,0.32238&amp;z=12&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            						</div>
                				</td>
                            </tr>
                     </table>
                </td>
          </table>
	</div>
 
</div>

<div id="footer">
	<p><a href="home.php">Home</a> || <a href="about.php">About Author</a> || <a href="privacy_policy.php">Privacy policy </a></p>
	<p>&copy; arif 2010. All rights reserved. <a href="http://www.mohona.org">www.mohona.org</a> &reg;</p>
</div>
<!-- end #footer -->
</body>
</html>