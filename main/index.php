<?php
	header("Expires: Fri, 14 October 1988 10:10:10 GMT");    // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	session_start();

	if (!isset($_SESSION['SESSION'])) require ( "session_init.php");
	
	if ($_SESSION['LOGGEDIN'] == true) {
			header("Location: home.php");
			exit;
	}
	//setting the page id and counting the hits
	$page_id = 1; 
	require("hits.php");
	
	$flg = "";
	$error = "";

	$flg=$_GET['flg'];
	switch ($flg) {
		case "yellow":
			$error = "Encryption key feild is blank. Please Enter the encrypted code !";
			break;
		case "red":
			$error = "That Encryption combination is not in our database.Please Try Again !";
			break;
		case "black":
			$error="You must Sign in before you Enter our site !";
			break;
		case "white":
			$error="You are being signed out successfully !";
			break;
		case "purple":
			$error="Your account is Inactive. Contact with system admin !";
			break;
		case "brown":
			$error = "Can't Connect to the Databse right now.Try again later !" ;
			break;
		case "passblack":
			$error = "Don't even think about it with out the encryption keys !" ;
			break;
		default:
			$error = "             ";
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<!--
<script type="text/javascript" SRC="cursor-trail.js"></script>
-->
<link href="login.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="../images/login.ico"/>
</head>

<body>
<h5 align="right">
<!--
<span style="color:#000; cursor:pointer; font-size:14px; text-align:right;">
<a href="../admin/index.php" target="_blank">Admin</a> 
</span>
&nbsp;&nbsp; 
<span style="color:#000; cursor:pointer; font-size:14px; text-align:right;">
<a href="../register/index.php" target="_blank">Register</a> 
</span>
&nbsp;&nbsp; 
-->
<span style="color:#000; cursor:pointer; font-size:14px; text-align:right;">
<a href="http://mail.mohona.org" target="_blank">Webmail</a> 
</span>
&nbsp;&nbsp; 
<span style="color:#000; cursor:pointer; font-size:14px; text-align:right;">
<a href="help.php" target="_blank">Help</a> 
</span>
</h5>
<!--<h1>website.org</h1>
-->
<form method="post" action="process_login.php" name="ac_login" id="ac_login" class="pos">
	<table align="center" cellpadding="5px" cellspacing="10px" height="100%" width="50%" border="0px">
    	<th align="center" height="10px" style="width:100%; font-size:30px; color:#000;"> Encryption Keys Please ! </th>
         <tr>
        	<td align="center" class="lgin_err">
            <?php print $error ?>
            </td>
        </tr>
		<tr>
        	<td align="center">
            <input type="password" name="lpassword" maxlength="32" height="10px" hspace="10px" class="en_bar"/>
            </td>
        </tr>
        <tr>
        	<td align="center">
            <input type="submit" name="submit" value="COME ON IN" height="10px" hspace="10px" class="en_btn"/>
            </td>
        </tr>
    </table>
</form>
<br />
<br />

<p class="footer">
&copy; Arif 2010 All rights reserved. www.mohona.org &reg;
</p>
</body>
</html>